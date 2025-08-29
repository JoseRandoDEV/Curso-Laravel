<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class Counter extends Component
{
    public $note = '';
    public $feedback = '';

    public function Update($id)
    {
        $noteToUpdate = Note::find($id);
        $noteToUpdate->content = $this->note;
        $noteToUpdate->save();
        $this->feedback = 'Note updated successfully!';
    }

    public function store()
    {
        Note::create(['content' => $this->note]);
        $this->feedback = 'Note saved successfully!';
    }

    public function destroy($id)
    {
        Note::destroy($id);
        $this->feedback = 'Note deleted successfully!';
    }

    public function render()
    {
        $notes = Note::all();
        return view('livewire.counter', compact('notes'));
    }
}
