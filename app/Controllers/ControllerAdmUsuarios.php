<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerAdmUsuarios
{

    public function AdmUsuarios()
    {
        $usuarios = App::get('database')->SelectAll('usuarios');
        return view('admin/ADM-usuarios', compact('usuarios'));
    }

    // public function store()
    // {
    //     $parameters = [
    //         'nome'=> $_POSTS['nome'],
    //         'email' => $_POSTS['email'],
    //         'senha' => $_POSTS['senha'],
    //     ];

    //     App::get('database')->insert('usuarios', $parameters);

    //     header('Location: /ADM-usuarios');
    // }
}
