<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['num_cni','annebac','ecole','releve_bac','seriebac','date_inscription','concours_id','user_id','date_Naissance','lieu_Naissance','code_postal','nationalite'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function concours()
    {
        return $this->belongsTo(Concours::class);
    }
    use HasFactory;
}
