<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
  public function index()
  {
    return view('notes.index', [
    'notes' => Note::orderBy('updated_at', 'DESC')->get()
    ]);
  }

  public function view(Note $note)
  {
    return view('notes.view', ['note' => $note]);
  }

  public function add()
  {
    if (request()->isMethod('post')) {
      $note = Note::create([
        'title' => request()->input('title')
      ]);

      if ($note->save())
        return redirect()->route('notes.view', ['note' => $note->id]);
    }

    return view('notes.add');
  }

  public function delete()
  {
    if (request()->isMethod('delete')) {
      Note::destroy(request()->input('id'));
      return back();
    }
  }
}