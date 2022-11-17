<?php

use App\Http\Controllers\Notes\NoteController;
use App\Http\Controllers\Notes\SubjectController;
use App\Http\Controllers\Posts\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('create-note', [NoteController::class, 'store']);
Route::get('', [NoteController::class, 'index']);
Route::get('detail-note/{note:slug}', [NoteController::class, 'show'])->name('detail-note.show');
Route::patch('edit-note/{note:slug}', [NoteController::class, 'update']);
Route::delete('delete-note/{note:slug}', [NoteController::class, 'destroy']);





Route::get('subject', [SubjectController::class, 'index']);

