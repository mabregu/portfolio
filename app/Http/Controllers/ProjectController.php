<?php

namespace App\Http\Controllers;

use App\Project;
use App\Events\ProjectSaved;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
        $project = new Project( $request->validated() );

        $project->image = $request->file('image')->store('images');

        $project->save();

        ProjectSaved::dispatch($project);

        return redirect()->route('projects.index')->with('status', __('The project was created successfully'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        if ( $request->hasFile('image') ) {
            Storage::delete($project->image);

            $project->fill( $request->validated() );

            $project->image = $request->file('image')->store('images');

            $project->save();

            ProjectSaved::dispatch($project);            
        } else {
            $project->update( array_filter($request->validated()) );
        }

        return redirect()->route('projects.show', $project)->with('status', __('The project was successfully updated'));
    }

    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        
        $project->delete();

        return redirect()->route('projects.index')->with('status', __('The project was successfully removed'));
    }
}
