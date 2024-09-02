<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <div>
        @forelse ($users as $user)
        {{ $user->id }} <br>
        {{ $user->name }} <br>
        @empty
        <p>No users<p>
        @endforelse
    </div>
    <br>

</body>
</html>
