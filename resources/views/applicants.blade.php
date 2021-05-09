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
        <a href="/task-create">Dodaj rad</a>
        <a href="/tasks">Lista radova</a>
    </nav>
</header>
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <table>
        <thead>
        <tr>
            <th>Naziv</th>
            <th>Email</th>
            <th>Akcije</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($applicants as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="/approve/{{$task->id}}/{{$user->id}}">Izaberi</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
