@extends('layout')

@section('title', __('create') .' '. __('project'))

@section('content')
    <h1>{{ __('Create new project') }}</h1>

    @include('partials.validation-errors')

   <form method="POST" action="{{ route('projects.store') }}">
        @include('projects._form', ['btnText' => __('Save')])
   </form>
@endsection
