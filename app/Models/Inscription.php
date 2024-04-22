<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = ['cni','annebac','moybac','ecole','document','seriebac','date_inscription','concours_id','user_id'];
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
