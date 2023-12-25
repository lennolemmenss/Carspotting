@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New FAQ Item') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('faq.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="question" class="form-label">{{ __('Question') }}</label>
                            <input type="text" class="form-control" id="question" name="question" required>
                        </div>

                        <div class="mb-3">
                            <label for="answer" class="form-label">{{ __('Answer') }}</label>
                            <textarea class="form-control" id="answer" name="answer" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="faq_category_id" class="form-label">{{ __('FAQ Category') }}</label>
                            <select class="form-control" id="faq_category_id" name="faq_category_id">
                                {{-- Option to select existing categories --}}
                                @foreach($faqCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- <div class="mb-3">
                            <label for="new_category" class="form-label">{{ __('New Category') }}</label>
                            <input type="text" class="form-control" id="new_category" name="new_category">
                        </div> --}}

                        {{-- <div>
                            <x-input-label for="cover-image" :value="__('Image')" />
                            <input type="file" name="cover-image" class="mt-1 block w-full" accept="image/*"/>
                            <x-input-error class="mt-2" :messages="$errors->get('cover-image')" />
                        </div> --}}

                        {{-- You might want to add other fields based on your requirements --}}

                        <br>

                        <button style="font-weight: 500" type="submit" class="btn btn-primary">{{ __('Place') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
