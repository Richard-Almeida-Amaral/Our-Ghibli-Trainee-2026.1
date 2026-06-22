<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PaginaIndividualPostsController
{

    public function index()
    {
        if (!isset($_GET['id'])) {
            die('Post não encontrado');
        }

        $id = (int) $_GET['id'];
        $publicacoes = App::get('database')->selectPostById($id);

        if (!$publicacoes) {
            die('Post não encontrado');
        }
        return view('site/paginaIndividualPosts',[
                'publicacoes' => $publicacoes]
        );
    }

}