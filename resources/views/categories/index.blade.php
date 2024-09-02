<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    @forelse ($categories as $category)
        {{ $category->name }}
    @empty
        <p>No categories</p>
    @endforelse
</body>
</html>
