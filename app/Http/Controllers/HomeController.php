<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Texto;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

    public function root()
    {
        return view('home.root');
    }

    public function about()
    {
        return view('home.about');
    }
    public function texts()
    {
        // Ordena os textos pela última data de modificação
        $textos = Texto::orderBy('updated_at', 'asc')->get();

        return view('home.root', ['textos' => $textos]);
    }

}
