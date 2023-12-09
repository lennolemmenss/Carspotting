<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        {{-- Check if the authenticated user is an admin --}}
        @if (auth()->check() && auth()->user()->is_admin)
            <div class="mb-3 text-end"> <!-- Add the text-end class for right alignment -->
                <a href="{{ route('admin.create') }}" class="btn btn-primary">Create Post</a>
            </div>
        @endif

        @foreach ($posts as $post)
            @include('profile.partials.message', ['post' => $post])
            <br>
        @endforeach
    </div>
</x-app-layout>
