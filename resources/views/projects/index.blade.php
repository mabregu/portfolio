@extends('layout')

@section('title', 'Portfolio')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0">{{ __('Portfolio') }}</h1>
        @auth
            <a class="btn btn-primary" href="{{ route('projects.create') }}">
                {{ __('Create new project') }}
            </a>
        @endauth
    </div>

    <p class="lead text-secondary">
        {{ __('Hobby projects, some are more interesting than others, but they all took me some time') }}
    </p>

    @include('partials.session-status')

    <ul class="list-group">
        @forelse($projects as $item)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('projects.show', $item) }}">
                    <span class="font-weight-bold">
                        {{ $item->title }}
                    </span>
                    <span class="text-black-50">
                        {{ $item->created_at->format('d/m/Y') }}
                    </span>
                </a>
            </li>
        @empty
            <li class="list-group-item border-0 mb-3 shadow-sm">
                {{ __('There are no projects to show') }}
            </li>
        @endforelse
        {{ $projects->links() }}
    </ul>
</div>
@endsection