<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PaginaPostsController
{

    public function index()
    {
        $paginaAtual = 1;

        if (isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $paginaAtual = intval($_GET['paginacaoNumero']);

            if ($paginaAtual <= 0) {
                return redirect('site/paginaPosts');
            }
        }

        $itensPorPagina = 6;

        $inicio = $itensPorPagina * ($paginaAtual - 1);

        $textoBusca = isset($_GET['busca']) ? $_GET['busca'] : '';
        $colunasBusca = $textoBusca !== '' ? ['nome']['email'] : null;



        $countposts = App::get('database')->countAll('posts', $textoBusca, $colunasBusca);

        if ($inicio >= $countposts && $countposts > 0) {
            return redirect('site/paginaPosts');
        }
        $posts = App::get('database')->selectAll('posts', $inicio, $itensPorPagina);
        $totalPaginas = ceil($countposts / $itensPorPagina);

        return view('site/paginaPosts', compact('posts', 'paginaAtual', 'totalPaginas', 'textoBusca'));
    }

}
