<!DOCTYPE html>
<html lang="fr" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <title>TP Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="min-height: 100vh; display: flex; flex-direction: column;">

@include('partials.navbar')

<main class="container my-4 flex-grow-1">
    <div class="row">
        @include('partials.sidebar')
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</main>

@include('partials.Footer')

</body>
</html>