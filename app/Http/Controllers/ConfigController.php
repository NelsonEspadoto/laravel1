<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
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
