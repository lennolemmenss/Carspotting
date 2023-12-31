<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inzending Details</title>
    <!-- Voeg Bootstrap CSS toe -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
        }

        .post-card {
            max-width: 600px;
            margin: auto;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .post-header a.profile-link {
            text-decoration: none; /* Remove underline */
            color: #007bff; /* Set the desired color for the link */
        }

        .post-header img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .post-content {
            margin-bottom: 20px;
        }

        .post-image {
            max-width: 100%;
            border-radius: 10px;
        }

        .edit-button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="post-card">
        <div class="post-header">
            <div>
                <a href="{{ route('profile.show', $post->user->id) }}" class="profile-link">
                    {{ $post->user->name }}
                </a>
                <br>
                <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            @if ($post->user->avatar && file_exists(public_path("storage/" . $post->user->avatar)))
                <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="User Avatar" style="height: 40px;">
            @else
                <img src="{{ asset('images/default_avatar.webp') }}" alt="Default Avatar" style="height: 40px;">
            @endif
        </div>



        <div class="post-content">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->content }}</p>
        </div>

        @if ($post->cover_image)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Cover Image" class="post-image">
            </div>
        @endif

        @if (auth()->check() && auth()->user()->is_admin)
            <div class="edit-button">
                <a href="{{ route('admin.edit', $post->id) }}" class="btn btn-primary">Edit</a>
            </div>
        @endif
    </div>

    <!-- Voeg Bootstrap JS en Popper.js toe (vereist voor sommige Bootstrap-functies) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
