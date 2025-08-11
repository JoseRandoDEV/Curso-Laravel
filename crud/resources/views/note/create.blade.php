@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Back to Notes</a>
<form method="POST" action="{{ route('note.store') }}">
    @csrf
    <label>Title:</label>
    <input type="text" name="title"/> <br />
    @error('title')
        <p style="color: red;"">{{ $message }}</p>
    @enderror

    <label>Description:</label>
    <input type="text" name="description"/> <br />
    @error('description')
        <p style="color:red;">{{ $message }}</p>
    @enderror

    <input type="submit" value="Create">
</form>
@endsection
