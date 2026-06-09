<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{

    public function index()
    {
        $usuarios = App::get('database')->selectAll('usuarios');

        return view('admin/tabelaUsuarios', compact('usuarios'));
    }

    public function criar()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'imagem' => '1'
        ];

        App::get('database')->insert('usuarios', $parameters);

        header('Location: /admin/usuarios');
    }

    public function delete()
    {
        die(var_dump($_POST));
        $id = $_POST['id'];
        App::get('database')->delete('usuarios', $id);

        header('Location: /admin/usuarios');
    }
}
