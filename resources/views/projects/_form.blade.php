@csrf

@if ($project->image)
    <img class="card-img-top mb-2 rendering-edit"
        src="/storage/{{ $project->image }}"
        alt="{{ $project->title }}"
    >
@endif

<div class="custom-file mb-2">
    <input name="image" 
        type="file" 
        class="custom-file-input" 
        id="customFile"
    >
  <label class="custom-file-label" for="customFile">{{ __('Choose file') }}</label>
</div>

<div class="form-group">
    <label for="title">{{ __('Title') .' '. __('of the project') }}</label>
    <input class="form-control border-0 bg-light shadow-sm"
        id="title" 
        name='title' 
        value="{{ old('title', $project->title) }}"
    >
</div>

<div class="form-group">
    <label for="url">{{ 'URL ' . __('of the project') }}</label>
    <input class="form-control border-0 bg-light shadow-sm"
        id="url" 
        name='url' 
        value="{{ old('url', $project->url) }}"
    >
</div>

<div class="form-group">
    <label for="description">{{ __('Description') .' '. __('of the project') }}</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
        name="description" 
        id="description" 
        cols="30" 
        rows="10">{{  old('description', $project->description) }}
    </textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
    {{ __('Cancel') }}
</a>