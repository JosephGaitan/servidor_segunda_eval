<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    // Listar todas las obras con su artista (RA8)
    public function index()
    {
        return Artwork::with('artist')->get();
    }

    // Guardar una nueva obra (Protegido por Sanctum RA4)
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string',
            'technique' => 'required|string',
            'price' => 'required|numeric',
            'artist_id' => 'required|exists:artists,id'
        ]);

        return Artwork::create($fields);
    }

    // Mostrar una sola obra
    public function show($id)
    {
        return Artwork::with('artist')->findOrFail($id);
    }

    // Actualizar una obra
    public function update(Request $request, $id)
    {
        $artwork = Artwork::findOrFail($id);
        $artwork->update($request->all());
        return $artwork;
    }

    // Eliminar una obra
    public function destroy($id)
    {
        return Artwork::destroy($id);
    }
}
