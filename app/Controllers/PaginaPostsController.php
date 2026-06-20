<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PaginaPostsController
{

    public function index()
    {
        $textoBusca = isset($_GET['busca']) ? $_GET['busca'] : '';
        $colunaBusca = $textoBusca !== '' ? ['titulo', 'descricao'] : null;

        $paginaAtual = 1;

        if (isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $paginaAtual = intval($_GET['paginacaoNumero']);

            if ($paginaAtual <= 0) {
                return redirect('site/paginaPosts');
            }
        }

        $itensPorPagina = 6;
        $inicio = $itensPorPagina * ($paginaAtual - 1);

        $countPosts = App::get('database')->countAll('posts', $textoBusca, $colunaBusca);

        if ($inicio >= $countPosts && $countPosts > 0) {
            return redirect('site/paginaPosts');
        }

        $posts = App::get('database')->selectJoinADMP('posts','usuarios',$inicio,$itensPorPagina,$textoBusca,$colunaBusca);

        $totalPaginas = ceil($countPosts / $itensPorPagina);

        return view('site/paginaPosts',compact('posts','paginaAtual','totalPaginas','textoBusca'));
    }
}
