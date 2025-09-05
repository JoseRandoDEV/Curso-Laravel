<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('create') }}">Create Info</a>
    <ul>
        @forelse($infos as $info)
            <li><img src="{{ asset('images/'.$info->file_uri) }}" width="126"></li>
        @empty
            <li>No Data</li>
        @endforelse
    </ul>
</body>
</html>
