<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between">
        <h3>TP Laravel</h3>
        <nav>
            <a href="{{ route('home') }}" class="text-white me-3">Accueil</a>
            <a href="{{ route('products.index') }}" class="text-white me-3">Produits</a>
            <a href="{{ route('about') }}" class="text-white me-3">À propos</a>
            <a href="{{ route('contact') }}" class="text-white">Contact</a>
        </nav>
    </div>
</header>

<main class="container my-4">
    @yield('content')
</main>

<footer class="bg-light text-center p-3">
    © {{ date('Y') }} TP Laravel
</footer>

</body>
</html>
