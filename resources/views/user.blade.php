<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        @if(auth()->user()->avatar)
                            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="Avatar" class="w-20 h-20 rounded-full mr-4">
                        @else
                            <!-- Wanneer er geen avatar is wordt de default avatar gebruikt -->
                            <img src="{{ asset('path/to/default/avatar.jpg') }}" alt="Default Avatar" class="w-12 h-12 rounded-full mr-4">
                        @endif
                        <div>
                            <h2 class="text-xl font-semibold">{{ auth()->user()->name }}</h2>
                            <p class="text-gray-600">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        {{ __('Edit Profile') }}
                    </a>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('About Me') }}</h3>
                    <p>{{ auth()->user()->about_me }}</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">{{ __('Birthday') }}</h3>
                    <p>{{ auth()->user()->birthday }}</p>
                </div>
                <a href="{{ route('profile.edit') }}" class="edit-button">
                    <x-primary-button>{{ __('Edit') }}</x-primary-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
