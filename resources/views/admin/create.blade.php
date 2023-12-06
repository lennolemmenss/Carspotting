<!-- create.blade.php -->
@extends('layouts.admin')

@section('content')
    <h2>Create Item</h2>

    <form method="POST" action="{{ route('create.post') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Create Item</button>
    </form>
@endsection
