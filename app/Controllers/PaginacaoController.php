<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PaginacaoController
{
    public function index()
    {
        $paginaAtual = 1;

        if (isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $paginaAtual = intval($_GET['paginacaoNumero']);

            if ($paginaAtual <= 0) {
                return redirect('admin/usuarios');
            }
        }

        $itensPorPagina = 6;

        $inicio = $itensPorPagina * ($paginaAtual - 1);

        $countUsuarios = App::get('database')->countAll('usuarios');

        if ($inicio >= $countUsuarios && $countUsuarios > 0) {
            return redirect('admin/usuarios');
        }
        var_dump($countUsuarios, $inicio, $itensPorPagina);
        die();
        $usuarios = App::get('database')->selectAll('usuarios', $inicio, $itensPorPagina);
        $totalPaginas = ceil($countUsuarios / $itensPorPagina);

        return view('site/paginacao', compact('usuarios', 'paginaAtual', 'totalPaginas'));
    }
}
