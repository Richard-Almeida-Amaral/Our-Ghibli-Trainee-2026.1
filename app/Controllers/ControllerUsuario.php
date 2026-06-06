<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuarioController
{

    public function index()
    {
        $usuarios = App:: get('database')->selectAll('usuarios'); 

        return view('admin/add', $usuarios);
    }

    public function criar()
    {

    }
}
