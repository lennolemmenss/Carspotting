<!-- create.blade.php -->
@extends('layouts.admin')

@section('content')

<div class="container" style="margin-left: 1%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Voeg een nieuwe post toe') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        {{-- <form method="POST" action="{{ route('dashboard.store') }}"> --}}
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Naam') }}</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">{{ __('Titel') }}</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">{{ __('Bericht') }}</label>
                            <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                        </div>

                        <button style="font-weight: 500" type="submit" class="btn btn-primary">{{ __('Plaatsen') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="container" style="margin-left: 1%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Voeg een nieuwe post toe') }}</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            {{-- <form method="POST" action="{{ route('dashboard.store') }}"> --}}
                            {{-- @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">{{ __('Naam') }}</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">{{ __('Titel') }}</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">{{ __('Bericht') }}</label>
                                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                            </div>

                            <button style="font-weight: 900" type="submit" class="btn btn-primary">{{ __('Plaatsen') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
