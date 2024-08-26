<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Show</title>
</head>
<body>

    {{$user->id}}
    <br>
    {{$user->name}}
    <br>
        <form action="/users/{{ $user->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</body>
</html>
