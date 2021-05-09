<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">

</head>
<body class="antialiased">
<header>
    <nav>
        <a class="active" href="/login">Prijava</a>
        <a href="/register">Registracija</a>
    </nav>
</header>
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <form action="/login" method="post">
        @csrf
        <p><input type="email" placeholder="Email" name="email" required/></p>
        <p><input type="password" placeholder="Lozinka" name="password" required/></p>
        <p><input type="submit" name="submit" value="Logiraj se"/></p>
    </form>

</div>
</body>
</html>
