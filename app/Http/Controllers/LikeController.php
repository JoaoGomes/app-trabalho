<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Texto;
use App\Models\Likes;


class LikeController extends Controller
{
    public function curtida_temp(Texto $texto)
    {
        $curtida = new Likes();
        $curtida->id_usuario = session('usuario.id');
        $curtida->id_texto = $texto->id;
        var_dump($texto->id);
        die();
        // Pega usuario atual (pela session?)
        // Pega texto atual
        // Checa se usuário já deu like
        // Aumenta uma curtida no banco 

        $curtida->save();
        return redirect()->route('textos.info', ['id_text' => $texto->id]);
    }

    public function curtida(Texto $texto)
    {
        $curtida = new Likes();
        // Pega usuario atual (pela session?)
        // Pega texto atual
        // Checa se usuário já deu like
        // Aumenta uma curtida no banco 

        $curtida->save();
        return redirect()->route('textos.info', $texto->id);
    }

}
