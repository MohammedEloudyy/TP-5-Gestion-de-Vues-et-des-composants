<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/calculer" method="POST">
        @csrf
        <h1>Calculatrice</h1>
        <input type="number" name="nombre1" placeholder="Nombre 1">
        <select name="operateur" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="nombre2" placeholder="Nombre 2">
        <button type="submit">Calculer</button>
        @if ($result !== null)
            <h2>Résultat: {{ $result}}</h2>
        @endif
    </form>
</body>
</html>