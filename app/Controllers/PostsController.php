<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    public function index()
    {
        $publicacoes =  App::get('database')->selectJoinADMP('posts', 'usuarios');
        return view('admin/tabelaPublicacoes', compact('publicacoes'));
    }

    public function criar()
    {

        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . "." . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $caminhoimagem = "public/assets/ " . $nomeimagem;

        move_uploaded_file($temporario, $caminhoimagem);

        $parameters = [
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'imagem' => $caminhoimagem,
            'data' => $_POST['data'],
            'usuarios_id' => 1        // $_POST['usuarios_id'] usar apos login
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }

    public function edit()
    {

    $id = $_POST['id'];

    $post = App::get('database')->selectOne('posts', $id);

    $caminhoimagem = $post->imagem;

    $parameters = [
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'imagem' => $caminhoimagem,
            'data' => $_POST['data'],
            'usuarios_id' => 1        // $_POST['usuarios_id'] usar apos login
        ];

        App::get('database')->update('posts', $id, $parameters);
        header('Location: /admin/posts');
    }


    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);

        header('Location: /admin/posts');
    }
}