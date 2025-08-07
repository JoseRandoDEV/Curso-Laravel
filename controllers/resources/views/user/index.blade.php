<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Users List: </h1>
    <ul>
        @forelse($users as $user)
            <li>{{ $user->name }}</li>
        @empty
            <li>List empty.</li>
        @endforelse
    </ul>
</body>

</html>
