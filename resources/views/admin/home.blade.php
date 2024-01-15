@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="d-flex flex-column align-items-center">
        <p class="lead text-center m-0">
            This is your Admin Panel where you can manage posts and check messages. Use the buttons below to navigate.
        </p>

        <br> 


        <div class="d-flex justify-content-center flex-wrap">
            <div class="card shadow p-4" style="max-width: 300px; margin: 10px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Create Post</h5>
                    <p class="card-text">Click the button below to create a new post.</p>
                    <a href="{{ route('admin.create') }}" class="btn btn-primary btn-hover">Create Post</a>
                </div>
            </div>



            <div class="card shadow p-4" style="max-width: 300px; margin: 10px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Create FAQ Questions or Categories</h5>
                    <p class="card-text">Click the button below to Create a FAQ question.</p>
                    <a href="{{ route('admin.create_faq') }}" class="btn btn-primary btn-hover">Create Question</a>
                </div>
            </div>

            <div class="card shadow p-4" style="max-width: 300px; margin: 10px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Check inbox</h5>
                    <p class="card-text">Click the button below to check messages.</p>
                    <a href="{{ route('admin.inbox') }}" class="btn btn-primary btn-hover">Check Messages</a>
                </div>
            </div>


            <div class="card shadow p-4" style="max-width: 300px; margin: 10px;">
                <div class="card-body text-center">
                    <h5 class="card-title">Promote to Admin</h5>
                    <p class="card-text">Click the button below to promote.</p>
                    <a href="{{ route('admin.promote') }}" class="btn btn-primary btn-hover">Promote</a>
                </div>
            </div>

            <br>

                           <!-- Knop om terug te gaan naar het dashboard -->
            <div class="text-center mb-5">
                <a href="{{ route('dashboard') }}" class="lead text-center" style="text-decoration: none;">Go Back to Dashboard</a>
            </div>
                
        </div>
    </div>
</div>
@endsection
