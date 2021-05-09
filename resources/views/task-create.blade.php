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
        <a href="/logout">Odjava</a>
        <a class="active" href="/task-create">Dodaj rad</a>
        <a href="/tasks">Lista radova</a>
    </nav>
</header>
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <form action="/task-create" method="post">
        @csrf
        <p><input type="text" placeholder="Naslov" name="title" required/></p>
        <p><input type="text" placeholder="Title" name="title_en" required/></p>
        <select name="study_type">
            <option value="strucni">Strucni</option>
            <option value="preddiplomski">Preddiplomski</option>
            <option value="diplomski">Diplomski</option>
        </select>
        <p><input type="submit" value="Kreiraj rad" name="submit"/></p>
    </form>

</div>
</body>
</html>
