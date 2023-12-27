<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="mb-3 text-end">
            @if (auth()->check() && auth()->user()->is_admin)
                <a href="{{ route('admin.create_faq') }}" class="btn btn-primary">Create FAQ</a>
            @endif
        </div>

        <form action="{{ route('FAQ') }}" method="get" class="mb-3">
            <label for="categoryFilter" class="form-label">Filter by Category:</label>
            <select class="form-control" id="categoryFilter" name="category">
                <option value="">All Categories</option>
                @foreach($faqCategories as $category)
                    <option value="{{ $category->id }}" @if(request('category') == $category->id) selected @endif>{{ $category->name }}</option>
                @endforeach
                
            </select>
            <button type="submit" class="btn btn-primary mt-2">Filter</button>
        </form>

        <h2 class="text-center faq-title">Frequently Asked Questions</h2>

        @if($faqItems->isEmpty())
            <p class="text-center">No FAQ items available.</p>
        @else
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($faqItems as $faqItem)
                        @include('profile.partials.faq-item', ['faqItem' => $faqItem])
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
