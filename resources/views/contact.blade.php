<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Page') }}
        </h2>
    </x-slot>

    <div class="container mt-10">
        <div class="mb-5 text-end">

            <div class="card-header bg-primary text-white text-center">
                <h2 class="card-title text-2xl">Contact Us</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label text-lg">Your Name</label>
                        <input type="text" class="form-control py-2 px-3 rounded-lg" id="name" name="name" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label text-lg">Your Email</label>
                        <input type="email" class="form-control py-2 px-3 rounded-lg" id="email" name="email" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label text-lg">Message</label>
                        <textarea class="form-control py-3 px-4 rounded-lg" id="message" name="message" rows="6" required></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary px-5 py-2 text-lg">{{ __('Submit') }}</button>
                </form>
            </div>

    </div>
</x-app-layout>
