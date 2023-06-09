<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('login');
});

Route::middleware(['auth'])->group(function () {
  Route::get('/notes', [NoteController::class, 'index'])->name('notes');
  Route::get('/notes/add', [NoteController::class, 'add'])->name('notes.add');
  Route::post('/notes/{note}', [NoteController::class, 'add'])->name('notes.view');
  Route::delete('/notes', [NoteController::class, 'delete'])->name('notes.delete');
  Route::get('/notes/{note}', [NoteController::class, 'view'])->name('notes.view');
});

require __DIR__.'/auth.php';
