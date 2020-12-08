@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">{{ __('Web developer') }}</h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ipsam sequi consequatur, facere nisi nam porro blanditiis. Itaque quos in, ullam nobis tempora aut esse harum dicta consequuntur obcaecati natus!
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