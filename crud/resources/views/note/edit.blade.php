@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">Back to Notes</a>
    <form method="POST" action="{{ route('note.update', $note->id) }}">
        @method('PUT')
        @csrf
        <label>Title:</label>
        <input type="text" name="title" value="{{ $note->title }}" /> <br />
        @error('title')
            <p style="color: red;"">{{ $message }}</p>
        @enderror

        <label>Description:</label>
        <input type="text" name="description" value="{{ $note->description }}" /> <br />
        @error('description')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Update" />
    </form>
@endsection
