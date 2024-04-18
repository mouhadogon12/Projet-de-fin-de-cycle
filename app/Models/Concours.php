<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inscription;

class Concours extends Model

{
    protected $fillable = ['nom','etablissement_id', 'titre', 'date_debut', 'date_fin', 'description'];

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
    use HasFactory;
}
