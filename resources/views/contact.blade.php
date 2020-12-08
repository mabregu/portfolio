@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
    <h1>{{ __('Contact') }}</h1>

    <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                id="name" 
                type="text" 
                name="name" 
                placeholder="{{ __('Name') }}" 
                value="{{ old('name') }}"
            >
            @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                id="email"
                type="email" 
                name="email" 
                placeholder="info@email.com" 
                value="{{ old('email') }}"
            >
            @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="subject">{{ __('Subject') }}</label>
            <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" 
                id="subject"
                type="text" 
                name="subject" 
                placeholder="Asunto" 
                value="{{ old('subject') }}"
            >
            @error('subject')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>    
        <textarea name="content" placeholder="Mensaje">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>{{ __('Send') }}</button>
    </form>
</div>
@endsection