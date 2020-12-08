@extends('layout')

@section('title', 'Contact')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                @csrf
                <h1 class="display-5">{{ __('Contact') }}</h1>
                <hr>
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
                <div class="form-group">
                    <label for="content">{{ __('Message') }}</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" 
                        id="content" 
                        name="content" 
                        placeholder="Mensaje">{{ old('content') }}
                    </textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    
                <button class="btn btn-primary btn-lg btn-block">{{ __('Send') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection