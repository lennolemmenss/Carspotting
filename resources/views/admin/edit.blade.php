<!-- edit.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Title') }}</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">{{ __('Content') }}</label>
                            <textarea class="form-control" id="content" name="content" rows="4" required>{{ old('content', $post->content) }}</textarea>
                        </div>

                        <div>
                            <x-input-label for="avatar" :value="__('Image')" />
                            <input type="file" name="cover-image" class="mt-1 block w-full" accept="image/*"/>
                            @if ($post->cover_image)
                                <div class="mt-2">
                                    <strong>Current Cover Image:</strong>
                                    <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Current Cover Image" class="img-fluid">
                                </div>
                            @endif
                            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
                        </div>

                        <br>



                        <button style="font-weight: 500" type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </form>

                     {{-- Delete button --}}
                     <form method="POST" action="{{ route('posts.destroy', $post->id) }}" class="mt-3">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">
                            {{ __('Delete Post') }}
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
