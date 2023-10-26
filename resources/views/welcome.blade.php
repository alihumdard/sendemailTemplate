<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>API CRUD</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        @if (Route::has('login'))
        <div class="text-center">

            @auth
            <a href="{{ url('/dashboard') }}" class="btn btn-success btn-lg">Go To Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-secondary btn-lg m-3">Log with Account</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg m-3">Got For Registeration</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>