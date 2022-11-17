<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use App\Http\Resources\NoteResource;
use App\Models\Models\Note;
use App\Models\Models\Subject;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store()
    {
        request()->validate([
            'subject' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $subject = Subject::findOrFail(request('subject'));
        $note = Note::create([
            'subject_id' => $subject->id,
            'title' => request('title'),
            'slug' => \Str::slug(request('title')),
            'description' => request('description')
        ]);

        return response()->json([
            'message' => 'Your Note was created',
            'note' => $note
        ]);
    }

    public function index () {
        $notes = Note::with('subject')->latest()->get();

        return NoteResource::collection($notes) ;
    }


    public function show(Note $note)
    {

        return NoteResource::make($note);

    }

    public function edit(Note $note) 
    {

        return response()->json($note);

    }
    public function update(Note $note)
    {
        request()->validate([
            'subject' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        $subject = Subject::findOrFail(request('subject'));

        $note->update([
            'subject_id' => $subject->id,
            'title' => request('title'),
            'description' => request('description')
        ]);
        return response()->json([
            'message' => 'Your Note was updated',
            'note' => $note
        ]);
    }
    public function destroy(Note $note) {

            $note->delete();

            return response()->json([
                'message' => 'your Note was Deleted'
            ], 200);

    }
}
