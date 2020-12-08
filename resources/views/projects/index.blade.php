@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>{{ __('Portfolio') }}</h1>
    <a href="{{ route('projects.create') }}">{{ __('Create new project') }}</a>

    @include('partials.session-status')

    <ul>
        @forelse($projects as $item)
            <li><a href="{{ route('projects.show', $item) }}">{{ $item->title }}</a></li>
        @empty
            <li>{{ __('There are no projects to show') }}</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection