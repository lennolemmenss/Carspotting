@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit FAQ Item') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('faq.update', $faqItem->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="question" class="form-label">{{ __('Question') }}</label>
                            <input type="text" class="form-control" id="question" name="question" value="{{ old('question', $faqItem->question) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="answer" class="form-label">{{ __('Answer') }}</label>
                            <textarea class="form-control" id="answer" name="answer" rows="4" required>{{ old('answer', $faqItem->answer) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">{{ __('Category') }}</label>
                            <select class="form-select" id="category" name="faq_category_id" required>
                                {{-- Loop through categories and populate the dropdown --}}
                                @foreach($faqCategories as $category)
                                    <option value="{{ $category->id }}" {{ $faqItem->faq_category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </form>

                    {{-- Delete button --}}
                    <form method="POST" action="{{ route('faq.destroy', $faqItem->id) }}" class="mt-3">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this FAQ item?')">
                            {{ __('Delete FAQ Item') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
