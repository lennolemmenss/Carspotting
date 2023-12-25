
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>


    <div class="container mt-5">
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
