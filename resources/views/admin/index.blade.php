@extends('layouts.admin')

@if (session('success'))
        <div style="background-color: #28a745; color: #ffffff; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($formData)
        <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px;">
            Formuliergegevens: {{ json_encode($formData) }}
        </div>
    @endif




    <h2>Welcome to the Admin Page</h2>

  @section('content')

  <div class="text-center">
        <h2 style="color: #3366cc; font-family: 'Arial', sans-serif;">Zoekertje </h2>
        <p>Een beschrijvende zin over het zoekertje.</p>
        <a href="#">Details</a>
        <br>
        <br>
        <br>
      <a href="{{ route('edit') }}">Edit item</a>
      <a href="{{ route('create') }}"><button>Create item</button></a>
    </div>


  @endsection