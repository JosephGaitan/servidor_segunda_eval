<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class GalleryController extends Controller
{
    public function index()
    {
        // Obtenemos las obras con sus artistas para la vista dinámica
        $artworks = Artwork::with('artist')->get();
        return view('gallery', compact('artworks'));
    }
}
