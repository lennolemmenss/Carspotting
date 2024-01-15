<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="mb-5 text-center">
                    <h2 class="text-2xl font-semibold text-gray-900">
                        Contact Us</h2>
                    <p class="text-lg text-gray-600">We would like to hear from you!</p>
                </div>

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div>
                        <label for="email" class="block text-lg font-medium text-gray-700">E-mail</label>
                        <input type="email" name="email" id="email" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div>
                        <label for="message" class="block text-lg font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" required class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
