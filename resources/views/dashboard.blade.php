
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        @foreach ($posts as $post)
            @include('profile.partials.message', ['post' => $post])
            <br>
        @endforeach
        
    </div>
</x-app-layout>
