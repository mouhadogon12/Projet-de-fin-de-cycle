<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    protected $fillable = ['nom', 'adresse','contact'];

    public function concours()
    {
        return $this->hasMany(Concours::class);
    }
    use HasFactory;
}
