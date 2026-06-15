<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
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

        $textoBusca = isset($_GET['busca']) ? $_GET['busca'] : '';
        $colunasBusca = $textoBusca !== '' ? ['nome']['email'] : null;



        $countUsuarios = App::get('database')->countAll('usuarios', $textoBusca, $colunasBusca);

        if ($inicio >= $countUsuarios && $countUsuarios > 0) {
            return redirect('admin/usuarios');
        }
        $usuarios = App::get('database')->selectAll('usuarios', $inicio, $itensPorPagina);
        $totalPaginas = ceil($countUsuarios / $itensPorPagina);

        return view('admin/tabelaUsuarios', compact('usuarios', 'paginaAtual', 'totalPaginas', 'textoBusca'));
    }


    public function criar()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'imagem' => '1'
        ];

        App::get('database')->insert('usuarios', $parameters);

        header('Location: /admin/usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('usuarios', $id);

        header('Location: /admin/usuarios');
    }


    public function edit()
    {
    $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],  
        ];

        $id =$_POST['id'];

        App::get('database')->update('usuarios', $id, $parameters);
        
        header('Location: /admin/usuarios');
    }
}
