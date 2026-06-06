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
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        App::get('database')->insert('usuarios', $parameters);

        header('Location: /ADM-usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('usuarios', $id);

        header('Location: /ADM-usuario');
    }
}
