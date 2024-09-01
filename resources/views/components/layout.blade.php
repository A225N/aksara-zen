<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AksaraZen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .body-custom {
            background: rgba(242, 245, 252, 1);
        }
        .navbar-custom {
            background: rgba(242, 245, 252, 1);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .form-control-sm {
            border: 0;
            width: 30vw;
        }
        .btn-profile {
            border: none;
            height: 40px;
            width: 40px;
            background-color: #6FB3D8;
            border-radius: 50%;
        }
        .card{
        border: none;
        }
        .badge{
            color: black;
            background-color: #58DF55;
        }
        a{
            text-decoration: none;
        }
        .btn-profile2 {
                border: none;
                height: 100px;
                width: 100px;
                background-color: #6FB3D8;
                border-radius: 50%;
        }
        .progress-bar{
            background-color: #58DF55;
        }
    </style>

</head>

<body class="body-custom">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('welcome') }}" >AksaraZen</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link px-3" href="{{ route('library.index') }}">
                        Library
                    </a>
                    <a class="nav-link px-3" href="{{ route('leaderboard.index') }}">
                        Leaderboard
                    </a>
                    <a class="nav-link px-3" href="{{ route('event.index') }}">
                        Event
                    </a>
                </div>
            </div>

            <div class="input-group me-4">
                <input type="text" class="form-control-sm" placeholder="Cari bacaan untukmu" aria-label="Recipient's username">
            </div>
            <form action="" >
                @csrf
                <button type="submit" class="btn-profile"></button>
            </form>

        </div>
    </nav>

    @isset($title)
        <div class="mb-4">
            <h4 class="container py-5 fw-bold">{{ $title }}</h4>
        </div>
    @endisset

    {{$slot}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
