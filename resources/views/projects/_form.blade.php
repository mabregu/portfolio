@csrf
<label>{{ __('Title') .' '. __('of the project') }}</label>
<input name='title' value="{{ old('title', $project->title) }}">
<br>
<label>{{ 'URL ' . __('of the project') }}</label>
<input name='url' value="{{ old('url', $project->url) }}">
<br>
<label>{{ __('Description') .' '. __('of the project') }}</label>
<textarea name="description" id="description" cols="30" rows="10">{{  old('description', $project->description) }}</textarea>
<br>
<button>{{ $btnText }}</button>