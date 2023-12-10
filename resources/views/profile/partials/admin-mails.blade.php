<div class="col-md-6 mb-4">
    <div class="card position-relative">
        <div class="card-body">
            <h5 class="card-title">{{ $message->name }}</h5>
            <h6 class="card-title">{{ $message->email }}</h6>
            <p class="card-text">{{ $message->message }}</p>
            <p class="card-text"><small class="text-muted">{{ $message->created_at->diffForHumans() }}</small></p>
        </div>

        <!-- Add a delete button in the bottom-right corner -->
        <form action="{{ route('inbox.delete', ['id' => $message->id]) }}" method="post" class="position-absolute bottom-0 end-0 m-3">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this message?')">Delete</button>
        </form>
    </div>
</div>
