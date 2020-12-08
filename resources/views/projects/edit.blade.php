@extends('layout')

@section('title', __('edit') .' '. __('project'))

@section('content')
    <h1>{{ __('Edit project') }}</h1>

    @include('partials.validation-errors')

   <form method="POST" action="{{ route('projects.update', $project) }}">   
        @method('PATCH')
        @include('projects._form', ['btnText' => __('Update')])
   </form>
@endsection
