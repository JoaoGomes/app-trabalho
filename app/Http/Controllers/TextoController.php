<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextoController extends Controller
{
    //
    public function writing()
    {
        return view('textos.writing');
    }

}
