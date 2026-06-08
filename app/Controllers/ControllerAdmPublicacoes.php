<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerAdmPublicacoes
{

    public function AdmPublicacoes()
    {
        $publicacoes =  App ::get('database')->selectAll('posts');
        return view('admin/ADM-publicacoes',compact('publicacoes'));
    }
    // public function store(){
    //     $parameters =[
    //         'titulo'=> $_POST['titulo'],
    //         'autor'=> $_POST['autor']
    //     ];
    // }
}
 
    // Select *
    // from posts as p join usuarios as u
    // on u.id = p.usuarios_id


