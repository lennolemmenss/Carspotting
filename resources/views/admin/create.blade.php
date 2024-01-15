@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Title') }}</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>


                        <div class="mb-3">
                            <label for="content" class="form-label">{{ __('Content') }}</label>
                            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                        </div>

                        <div>
                            <x-input-label for="avatar" :value="__('Image')" />
                            <input type="file" name="cover-image" class="mt-1 block w-full" accept="image/*" required/>
                            <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
                        </div>

                        <br>

                        {{-- Datum automatisch toevoegen --}}


                        <button style="font-weight: 500" type="submit" class="btn btn-primary">{{ __('Post') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

