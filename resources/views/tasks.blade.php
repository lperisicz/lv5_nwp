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
        @if($loggedUserRole == 'teacher') <a href="/task-create">Dodaj rad</a> @endif
        <a class="active" href="/tasks">Lista radova</a>
        @if($loggedUserRole == 'admin') <a href="/users">Korisnici</a>  @endif
    </nav>
</header>
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <table>
        <thead>
        <tr>
            <th>Naziv</th>
            <th>Naziv na engleskom</th>
            <th>Studijski program</th>
            @if($loggedUserRole == 'teacher')
                <th>Izabrao</th> @endif
            <th>Akcije</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{$task->title}}</td>
                <td>{{$task->title_en}}</td>
                <td>{{$task->study_type}}</td>
                @if($loggedUserRole == 'teacher')
                    <td> @if($task->student){{$task->student->name}} @endif</td> @endif
                <td>
                    @if($loggedUserRole == 'student')<a href="/apply/{{$task->id}}">Prijavi se</a>  @endif
                    @if($loggedUserRole == 'teacher')<a href="/applicants/{{$task->id}}">Pogledaj prijave</a>@endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
