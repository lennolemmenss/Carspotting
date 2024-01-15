<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        {{-- Check if the authenticated user is an admin --}}
        @if (auth()->check() && auth()->user()->is_admin)
            <div class="mb-3 d-flex justify-content-between">
                
                <a href="{{ route('admin.home') }}" class="btn btn-secondary">Admin Homepage</a>
                <a href="{{ route('admin.create') }}" class="btn btn-primary">Create Post</a>
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-2 g-4"> <!-- Use row-cols-md-2 for 2 columns on medium screens -->
            @foreach ($posts as $post)
                <div class="col">
                    @include('profile.partials.message', ['post' => $post])
                    <br>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
