<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="create-event">
        <form action="/events" method='post'>
            @csrf
            <label for="title">Event's title</label><br>
            <input type="text" name="title" id="title" placeholder="Enter title">
            <br>
            <label for="description">Description</label><br>
            <input type="text" name="description" id="description" placeholder="Enter description">
            <br>
            <label for="start-time">Start Time</label>
            <input type="datetime-local" name="start-time" id="start-time">
            <br>
            <label for="end-time">End Time</label>
            <input type="datetime-local" name="end-time" id="start-time">
            <br>
            <input type="submit" value="Create">
        </form>
    </div>
</body>
</html>
