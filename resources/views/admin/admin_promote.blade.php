@extends('layouts.admin')

@section('content')

<div class="card shadow p-4" style="max-width: 400px; margin: 10px auto;">
    <div class="card-body">
        <h5 class="card-title">Promote to Admin</h5>
        <p class="card-text">Select a user from the list below and promote them to admin.</p>

        <form method="POST" action="{{ route('admin.promote.submit') }}">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Select User:</label>
                <select name="user_id" id="user_id" class="form-select">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to promote this member as admin')">Promote to Admin</button>
        </form>
    </div>
</div>

@endsection
