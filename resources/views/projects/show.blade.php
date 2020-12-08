@extends('layout')

@section('title', __('Portfolio') . ' | ' . $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    
    <a href="{{ route('projects.edit', $project) }}">{{ __('edit') }}</a>

    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf @method('DELETE')
        <button>{{ __('delete') }}</button>
    </form>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection