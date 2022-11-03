<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class web extends Controller
{
    function  Anasayfa()
    {
        return view("Web");
    }
}
