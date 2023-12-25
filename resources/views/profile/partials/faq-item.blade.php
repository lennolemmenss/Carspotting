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

        .faq-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .post-card {
            max-width: 600px;
            margin: auto;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            margin-right:20px;
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

<div class="container mt-5">
    {{-- <h2 class="text-center faq-title">Frequently Asked Questions</h2> --}}

    <div class="card mb-3 post-card">
        <div class="card-body">
            <h5 class="card-title">{{ $faqItem->question }}</h5>
            <p class="card-text">{{ $faqItem->answer }}</p>
            <p class="card-text"><small class="text-muted">{{ $faqItem->faqCategory->name}}</small></p>
            <a href="#" class="btn btn-primary edit-button">Edit</a>
        </div>
    </div>
</div>

</body>
</html>
