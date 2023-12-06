
@extends('layouts.admin')

@section('content')
    <h2>Edit Item</h2>

    <form method="POST" action="{{ route('edit.post') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Edit Item</button>
    </form>
@endsection
