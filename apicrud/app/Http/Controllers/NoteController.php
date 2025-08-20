<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    public function index():JsonResource
    {
        // return response()->json(Note::all(), 200);
        return NoteResource::collection(Note::all()); // Utilizando NoteResource para formatear la respuesta
    }

    public function store(NoteRequest $request):JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => 'Nota creada correctamente',
            'data' => new NoteResource($note) // Utilizando NoteResource para formatear la respuesta
        ], 201);
    }

    public function show($id):JsonResource
    {
        $note = Note::find($id);
        //return response()->json($note, 200);
        return new NoteResource($note); // Utilizando NoteResource para formatear la respuesta
    }

    public function update(NoteRequest $request, $id):JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success' => 'Nota actualizada correctamente',
            'data' => new NoteResource($note) // Utilizando NoteResource para formatear la respuesta
        ], 200);
    }

    public function destroy($id): JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'message' => 'Nota eliminada correctamente'
        ], 200);
    }
}
