@extends('layouts.admin')

@section('content')
     <div class="container mt-5">
        <h2 class="text-center mb-4" >Inbox</h2>

        @if($messages->isEmpty())
            <p class="text-center">No messages in the inbox.</p>
        @else
            <div class="row">
                @foreach($messages as $message)
                    @include('profile.partials.admin-mails', ['message' => $message])
                @endforeach
            </div>
        @endif
    </div>
@endsection


