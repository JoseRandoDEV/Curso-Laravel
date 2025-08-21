<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div class="container">

    @forelse($products as $product)
        <div class="card">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->short_description }}</p>
            <p>{{ $product->price }} USD </p>
        </div>
    @empty
        <h5>No data.</h5>
    @endforelse
    </div>
</body>
</html>
