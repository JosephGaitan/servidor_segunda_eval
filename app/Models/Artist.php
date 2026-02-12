<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'bio', 'nationality'];

    public function artworks() {
        return $this->hasMany(Artwork::class);
    }
}
