@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Formulier voor een nieuw FAQ-item -->
            <div class="card mb-4">
                <div class="card-header">{{ __('Create FAQ Questions') }}</div>

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
                                {{-- Optie om bestaande categorieën te selecteren --}}
                                @foreach($faqCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>

                        <button style="font-weight: 500" type="submit" class="btn btn-primary">{{ __('Create Question') }}</button>
                    </form>
                </div>
            </div>

            <br>

            <div class="card">
                <div class="card-header">{{ __('Create FAQ Categories') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.store_faq_category') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="category_name" class="form-label">{{ __('Category Name') }}</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" required>
                        </div>

                        <br>

                        <button style="font-weight: 500" type="submit" class="btn btn-primary">{{ __('Create Category') }}</button>
                    </form>

    
                </div>
            </div>
            
            <br>

            <div class="card">
                <div class="card-header">{{ __('Delete FAQ Categories') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.delete_faq_category', $category->id) }}">
                        @csrf
                        @method('DELETE')
                    
                        <div class="mb-3">
                            <label for="delete_category_id" class="form-label">{{ __('Select Category to Delete') }}</label>
                            
                                <p> 
                                    <b>Attention:</b> Ensure that all questions linked to the category are deleted before attempting to delete the category. 
                                    Deleting a category with associated questions may lead to data inconsistencies or errors.
                                </p>

                                {{-- Display validation errors --}}
                                @if ($errors->has('delete_category_id'))
                                <span class="text-danger">{{ $errors->first('delete_category_id') }}</span>
                                @endif
                                <select class="form-control" id="delete_category_id" name="delete_category_id">
                                    {{-- Optie om bestaande categorieën te selecteren --}}
                                    @foreach($faqCategories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                        </div>
                    
                        <br>
                    
                        <button style="font-weight: 500" type="submit" class="btn btn-danger">{{ __('Delete Category') }}</button>
                    </form>
                    
                </div>
            
            </div>


        </div>
    </div>
</div>
@endsection

