@extends('layout')

@section('title', __('Portfolio') . ' | ' . $project->title)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-8 mx-auto">
            @if ($project->image)
                <img class="card-img-top"
                    src="/storage/{{ $project->image }}"
                    alt="{{ $project->title }}"
                >
            @endif
            <div class="bg-white p-5 shadow rounded">
                <h1>{{ $project->title }}</h1>
                <p class="text-secondary">
                    {{ $project->description }}
                </p>
                <p class="text-black-50">
                    {{ $project->created_at->diffForHumans() }}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('projects.index') }}">
                        {{ __('Back') }}
                    </a>
                    @auth
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">
                                {{ __('edit') }}
                            </a>
                            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
                                {{ __('delete') }}
                            </a>
                        </div>
                
                        <form class="d-none"
                            id="delete-project" 
                            method="POST" 
                            action="{{ route('projects.destroy', $project) }}"
                        >
                            @csrf @method('DELETE')
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection