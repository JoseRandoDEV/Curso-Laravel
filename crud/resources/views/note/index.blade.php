@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}">Create New Note</a>
<ul>
    @forelse($notes as $note)
        <li>
            <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> |
            <a href="{{ route('note.edit', $note->id) }}">Edit</a> |
            <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                {{-- Use POST method with DELETE --}}
                @csrf
                @method('DELETE')
                <input type="submit" value="DELETE" />
            </form>
        </li>
    @empty
        <p>No data.</p>
    @endforelse
</ul>
@endsection
