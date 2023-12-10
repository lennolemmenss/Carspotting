<!-- showprofile.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($user->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="mb-3">
                    <strong>Name:</strong> {{ $user->name }}
                </div>
                <div class="mb-3">
                    <strong>Email:</strong> {{ $user->email }}
                </div>
                <div class="mb-3">
                    <strong>Joined:</strong> {{ $user->created_at }}
                </div>

                @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="w-20 h-20 rounded-full mr-4">
                        @else
                            <!-- Wanneer er geen avatar is wordt de default avatar gebruikt -->
                            <img src="{{ asset('images/default_avatar.webp') }}" alt="Default Avatar" class="w-20 h-20 rounded-full mr-4">
                        @endif
            </div>
        </div>
    </div>
</x-app-layout>