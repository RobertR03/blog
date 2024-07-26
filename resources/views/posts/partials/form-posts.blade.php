<label for="title">{{ __('Title') }}</label>
<br>
<input type="text" name="title" value="{{ old('title', $post->title) }}">
@error('title')
    <br>
    <small style="color: red;">{{$message}}</small>
@enderror
<br>
<label for="description">{{ __('Description') }}</label>
<br>
<textarea name="description">{{ old('description', $post->description) }}</textarea>
@error('description')
    <br>
    <small style="color: red;">{{$message}}</small>
@enderror
<br>