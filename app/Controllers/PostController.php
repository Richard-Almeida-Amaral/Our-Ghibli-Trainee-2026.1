<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    public function criar()
    {

        $temporario = $_FILES['imagem']['tpm_name'];
        $nomeimagem = sha1(uniqid($_FILES['imagem']['name'],true)) . "." .pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $caminhoimagem = "public/assets/imagemPosts/" . $nomeimagem;

        move_uploaded_file($temporario, $caminhoimagem);

        $parameters = [
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'imagem' => $caminhoimagem,
            'data' => $_POST['data'],
            'usuarios_id'=>$_POST['usuarios_id']
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);

        header('Location: /admin/posts');
    }
}