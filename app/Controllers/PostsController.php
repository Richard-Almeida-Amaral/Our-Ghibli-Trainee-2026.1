<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsController
{

    public function index()
    {
        $publicacoes =  App ::get('database')->selectJoinADMP('posts','usuarios');
        return view('admin/tabelaPublicacoes',compact('publicacoes'));
    }
}