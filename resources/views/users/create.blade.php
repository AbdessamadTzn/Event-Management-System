<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <div class="create-user">
        <form action="/users" method="post">
            @csrf
            <label for="name">Your name</label><br>
            <input type="text" name="name" id="name"><br>
            <label for="email">Your email</label><br>
            <input type="email" name="email" id="email"><br>
            <label for="password">Your Password</label><br>
            <input type="password" name="password" id="password"><br>
            <input type="submit" value="Sign Up">



        </form>
    </div>
</body>
</html>
