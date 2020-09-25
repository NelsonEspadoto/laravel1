<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $dados = $request->input('nome');

        echo 'Seja Bem Vindo '.$data['nome'];
        print_r($dados);

        return view('config');
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
