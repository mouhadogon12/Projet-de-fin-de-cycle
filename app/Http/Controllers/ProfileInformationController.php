<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function show(){
        return view ('profile.show');
    }
}
