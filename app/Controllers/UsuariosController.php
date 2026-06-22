<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{

    public function index()
    {
        $textoBusca = isset($_GET['busca']) ? $_GET['busca'] : '';

        $colunaBusca = $textoBusca !== '' ? ['nome', 'email'] : null;

        $paginaAtual = 1;

        if (isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $paginaAtual = intval($_GET['paginacaoNumero']);

            if ($paginaAtual <= 0) {
                return redirect('admin/usuarios');
            }
        }

        $itensPorPagina = 6;
        $inicio = $itensPorPagina * ($paginaAtual - 1);

        $countUsuarios = App::get('database')->countAll('usuarios', $textoBusca, $colunaBusca);

        if ($inicio >= $countUsuarios && $countUsuarios > 0) {
            return redirect('admin/usuarios');
        }

        $usuarios = App::get('database')->selectUsuarios('usuarios', $inicio, $itensPorPagina, $textoBusca, $colunaBusca);

        $totalPaginas = ceil($countUsuarios / $itensPorPagina);

        return view('admin/tabelaUsuarios',compact('usuarios', 'paginaAtual', 'totalPaginas', 'textoBusca')
        );
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


        public function cadastro()
    {
        $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';

        if ($nome === '' || $email === '' || $senha === '') {
            $_SESSION['mensagem-erro'] = 'Preencha todos os campos para criar o usuário.';
            header('Location: /login');
            exit;
        }

        $parameters = [
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha,
            'imagem' => '1'
        ];

        App::get('database')->insert('usuarios', $parameters);

        header('Location: /admin');
        exit;
    }


    public function edit()
    {
        $parameters = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        $id = $_POST['id'];

        App::get('database')->update('usuarios', $id, $parameters);

        header('Location: /admin/usuarios');
    }
}
