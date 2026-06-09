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

    public function edit()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        $id = $_POST['id'];

        App::get('database')->update('usuarios', $id, $parameters);

        header('Location: /ADM-usuarios');
    }

}
