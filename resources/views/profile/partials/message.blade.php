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
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Bericht {{ $post->id }}</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Naam:</strong> {{ $post->user->name }} {{-- Assuming 'user' is the relationship method in your Post model --}}
            </div>
            <div class="mb-3">
                <strong>Titel:</strong> {{ $post->title }}
            </div>
            <div class="mb-3">
                <strong>Bericht:</strong>
                <p>{{ $post->content }}</p>
            </div>
            <div class="mb-3">
                <strong>Publicatiedatum:</strong> {{ $post->created_at->format('Y-m-d') }}
            </div>
        </div>

    <!-- Voeg Bootstrap JS en Popper.js toe (vereist voor sommige Bootstrap-functies) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
