<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerPaginaDePosts
{

    public function PaginaDePosts()
    {
        return view('site/paginaDePosts');
    }

    public function index()
    {

        $database = App::get('database');
        $limit = 6;

        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($currentPage < 1) {
            $currentPage = 1;
        }

        $offset = ($currentPage - 1) * $limit;
        $totalPosts = $database->countAll('posts');
        $totalPaginas = ceil($totalPosts / $limit);

        $posts = $database->paginate('posts', $limit, $offset);

        return view('site/paginaDePosts', [
            'posts' => $posts,
            'currentPage' => $currentPage,
            'totalPages' => $totalPaginas
        ]);
    }
}
