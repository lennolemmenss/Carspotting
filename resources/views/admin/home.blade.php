
@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="d-flex flex-column align-items-center">
        <p class="lead text-center m-0">
            This is your Admin Panel where you can manage posts and check messages. Use the buttons below to navigate.
        </p>

        <br> 

        <div class="d-flex justify-content-center">
            <div class="card-deck">
                <div class="card shadow p-4" style="max-width: 300px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Create Post</h5>
                        <p class="card-text">Click the button below to create a new post.</p>
                        <a href="{{ route('admin.create') }}" class="btn btn-primary btn-hover">Create Post</a>
                    </div>
                </div>

                <br> 

                <div class="card shadow p-4" style="max-width: 300px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Edit Post</h5>
                        <p class="card-text">Click the button below to edit an existing post.</p>
                        <a href="#" class="btn btn-primary btn-hover">Edit Post</a>
                    </div>
                </div>

                <br> 

                <div class="card shadow p-4" style="max-width: 300px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Check Messages</h5>
                        <p class="card-text">Click the button below to check messages.</p>
                        <a href="#" class="btn btn-primary btn-hover">Check Messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
