<x-input-label for="title" :value="__('Title')"/>
<x-text-input type="text" name="title" id="title" :value="old('title', $post->title)" class="w-full mt-1 block"/>
@error('title')
    <small style="color: red;" class="mt-2">{{$message}}</small>
@enderror
<x-input-label for="description" :value="__('Description')"/>
<x-textarea name="description" id="description" class="w-full mt-1 block">{{ old('description', $post->description) }}</x-textarea>
<x-input-error :messages="$errors->get('description')" class="mt-2" />