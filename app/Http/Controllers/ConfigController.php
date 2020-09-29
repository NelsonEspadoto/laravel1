<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request)
    {
        $nome = $request->input('nome', 'Visitante');
        $idade = $request->input('idade');
        $data = [
            'nome' => $nome, 
            'idade' => $idade
        ];
        
        return view('admin.config', $data);
    }

    public function info()
    {
        echo 'Info';
    }

    public function permissoes()
    {
        echo 'Permissões';
    }
}
