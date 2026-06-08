<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerAdmPublicacoes
{
    public function AdmPublicacoes()
    {
        $publicacoes =  App ::get('database')->selectJoinADMP('posts','usuarios');
        return view('admin/ADM-publicacoes',compact('publicacoes'));
    }
    public function steal(){
        $parameters=[
        'titulo' => $_POST['titulo'],
        'descricao' => $_POST['descricao'],
        'imagem' => $_POST['imagem'],
        'usuarios_id' => 1
         ];

        App::get('database')->insertADMP('posts',$parameters);
        header('Location: /publi');   // talvez esteja errado
    }
}

