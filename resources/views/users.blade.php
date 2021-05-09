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
        <a class="active" href="/users">Korisnici</a>
    </nav>
</header>
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <table>
        <thead>
        <tr>
            <th>Puno ime</th>
            <th>Email</th>
            <th>Uloga</th>
            <th>Akcija 1</th>
            <th>Akcija 2</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>

                    @if($user->role != 'admin')<td> <a href="/change-role/{{$user->id}}/admin">U ulogu admina </a> </td>@endif
                    @if($user->role != 'teacher')<td> <a href="/change-role/{{$user->id}}/teacher">U ulogu učitelja </a> </td>@endif
                    @if($user->role != 'student')<td> <a href="/change-role/{{$user->id}}/student">U ulogu učenika</a> </td>@endif

            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
