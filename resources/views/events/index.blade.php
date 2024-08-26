<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    <div>
        @foreach($events as $event)
        {{ $event->id }}
        <br>
        {{ $event->title }} - {{ $event->start_time}}
        @endforeach
    </div>
    <p>{{ session('msg') }}</p>
</body>
</html>
