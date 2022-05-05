<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Note;

class Editor extends Component
{
  public $note;
  public $title;
  public $body;

  public function mount($note = '')
  {
    $this->title = $note->title;
    $this->body = $note->body;
  }

  public function render()
  {
    return view('livewire.editor');
  }

  public function updated()
  {
    $this->note->update([
      'title' => $this->title,
      'body' => $this->body,
    ]);
  }
}
