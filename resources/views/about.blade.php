@extends('layout')

@section('title', 'About')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">{{ __('About me') }}</h1>
            <p class="lead text-secondary">
                Años en el área de sistemas me dan la seguridad para tomar un proyecto de gran tamaño y llevarlo por el camino del éxito. Soy Profesor de Informática, Analista de Sistemas, Licenciado en Gestión de la Información y sobre todo un entusiasta en lo referente a Tecnologías Web.<br><br>Primero charlamos un poco sobre tu proyecto o negocio, para entender bien de qué va. Redacto y diseño tu sitio web en  un par de días, generando contenido de calidad en base a tus comentarios y mi experiencia. Una vez nos aseguremos de tu conformidad avanzamos. Y listo en un pim pam pum, tu sitio online.
            </p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">
                {{ __('Contact me') }}
            </a>
            <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">
                {{ __('Portfolio') }}
            </a>
        </div>
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="{{__('About me')}}">
        </div>
    </div>
</div>
@endsection