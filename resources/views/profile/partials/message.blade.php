<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inzending Details</title>
    <!-- Voeg Bootstrap CSS toe -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="card mb-3"> <!--mb-3 zorgt voor spatie tussen de berichten -->
        <div class="card-header">
            <h5 class="card-title">Bericht {{ $post->id }}</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Naam:</strong> {{ $post->user->name }}
            </div>
            <div class="mb-3">
                <strong>Titel:</strong> {{ $post->title }}
            </div>
            <div class="mb-3">
                <strong>Bericht:</strong>
                <p>{{ $post->content }}</p>
            </div>
            <div class="mb-3">
                <strong>Publicatiedatum:</strong> {{ $post->created_at->diffForHumans() }}
            </div>
            
            @if ($post->cover_image)
                <div class="mb-3">
                    <strong>Cover Image:</strong>
                    <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Cover Image" class="img-fluid">
                </div>
            @endif


            @if (auth()->check() && auth()->user()->is_admin)
            <div class="mt-3">
                <a href="{{ route('admin.edit', $post->id) }}" class="btn btn-primary">Edit</a>
            </div>
             @endif
        </div>
    </div>

    <!-- Voeg Bootstrap JS en Popper.js toe (vereist voor sommige Bootstrap-functies) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
