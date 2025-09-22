<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<body>
    <form method="POST" action="{{ route('search') }}">
        @csrf
        <input type="text" placeholder="Type name to Search..." name="name" value="{{ old('name') }}">
        <button type="submit">Search</button>
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <h5>Minimo 3 letras, Maximo 255, solo MAYUSCULAS</h5>
    </form>
</body>
</html>
