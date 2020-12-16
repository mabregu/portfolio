@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">{{ __('Web developer') }}</h1>
            <p class="lead text-secondary">
                ¡Hola! Si tienes un negocio que quieres plasmar en internet y así llegar a más personas, con mucho gusto te puedo ayudar. Contame tu idea y veremos que solución se ajusta mejor a tus necesidades.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">
                {{ __('Contact me') }}
            </a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">
                {{ __('Portfolio') }}
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/home.svg" alt="{{__('Web developer')}}">
        </div>
    </div>
</div>
@endsection