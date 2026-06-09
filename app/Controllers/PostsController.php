<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostsController
{

    public function index()
    {
        return view('admin/tabelaPublicacoes');
    }
}