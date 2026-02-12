<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    /** @use HasFactory<\Database\Factories\ArtworkFactory> */
    use HasFactory;

    protected $fillable = ['title', 'technique', 'price', 'artist_id'];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }
}
