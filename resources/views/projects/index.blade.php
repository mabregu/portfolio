@extends('layout')

@section('title', 'Portfolio')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        @isset($category)
            <div>
                <h1 class="display-4 mb-0">{{ $category->name }}</h1>
                <a href="{{ route('projects.index') }}">
                    {{ __('Back') }}
                </a>
            </div>
        @else
            <h1 class="display-4 mb-0">{{ __('Portfolio') }}</h1>
        @endisset
        @auth
            <a class="btn btn-primary" 
                href="{{ route('projects.create') }}"
            >
                {{ __('Create new project') }}
            </a>
        @endauth
    </div>

    <p class="lead text-secondary">
        {{ __('Hobby projects, some are more interesting than others, but they all took me some time') }}
    </p>

    <div class="d-flex flex-wrap justify-content-between align-items-start">
        @forelse($projects as $item)
        
        <div class="card border-0 shadow-sm mt-4 mx-auto" 
            style="width: 18rem;"
        >
            @if ($item->image)
                <img class="card-img-top rendering"
                    src="/storage/{{ $item->image }}"
                    alt="{{ $item->title }}"
                >
            @endif
            <div class="card-body">
                <h5 class="card-title">
                    <a class="text-secondary d-flex justify-content-between align-items-center" 
                        href="{{ route('projects.show', $item) }}"
                    >
                        <span class="font-weight-bold">
                            {{ $item->title }}
                        </span>
                    </a>
                </h5>
                <h6 class="card-subtitle">
                    {{ $item->created_at->format('d/m/Y') }}
                </h6>
                <p class="card-text text-truncate">
                    {{ $item->description }}
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('projects.show', $item) }}" 
                        class="btn btn-primary btn-sm"
                    >
                        {{ __('See more') }}...
                    </a>
                    @if ($item->category_id)
                        <a href="{{ route('categories.show', $item->category) }}" 
                            class="badge badge-secondary"
                        >
                            {{ $item->category->name }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
        @empty
            <div class="card">
                <div class="card-body">
                    {{ __('There are no projects to show') }}
                </div>
            </div>
        @endforelse
        {{ $projects->links() }}
    </div>
</div>
@endsection