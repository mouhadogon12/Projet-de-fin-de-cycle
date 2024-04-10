<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concours extends Model

{
    protected $table = 'concours';
    protected $fillable=[
        'nom',
        'date_debut',
        'date_fin',
        'description'
    ];
    use HasFactory;
}
