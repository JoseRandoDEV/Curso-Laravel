<div>
    <input type="text" wire:model="note" placeholder="Enter a note">
    <button wire:click="store">Save Note</button>
    <p style="color:red;">{{ $feedback }}</p>

    @foreach ($notes as $note)
        <p>{{ $note->content }}
            <button wire:click="Update('{{ $note->id }}')">Update</button>
            <button wire:click="destroy('{{ $note->id }}')">Delete</button></p>
    @endforeach
</div>
