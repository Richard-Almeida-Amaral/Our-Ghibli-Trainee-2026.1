<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    public function index()
    {

        $textoBusca = isset($_GET['busca']) ? $_GET['busca'] : '';
        $colunaBusca = $textoBusca !== '' ? ['titulo','descricao'] : null;

        $publicacoes =  App::get('database')->selectJoinADMP('posts', 'usuarios');

        $paginaAtual = 1;

        if (isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $paginaAtual = intval($_GET['paginacaoNumero']);

            if ($paginaAtual <= 0) {
                return redirect('admin/posts');
            }
        }

        $itensPorPagina = 6;

        $inicio = $itensPorPagina * ($paginaAtual - 1);



        $countPost = App::get('database')->countAll('posts', $textoBusca, $colunaBusca);

        if ($inicio >= $countPost && $countPost > 0) {
            return redirect('admin/posts');
        }
        $publicacoes = App::get('database')->selectJoinADMP('posts','usuarios', $inicio, $itensPorPagina, $textoBusca, $colunaBusca);
        $totalPaginas = ceil($countPost / $itensPorPagina);

        return view('admin/tabelaPublicacoes', compact('publicacoes', 'paginaAtual', 'totalPaginas', 'textoBusca'));
    }
    

    public function criar()
    {

        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . "." . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $caminhoimagem = "public/assets/ " . $nomeimagem;

        move_uploaded_file($temporario, $caminhoimagem);

        $parameters = [
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'imagem' => $caminhoimagem,
            'data' => $_POST['data'],
            'usuarios_id' => $_SESSION['id'] //usar apos login
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }

    public function delete()
    {
        $id = $_POST['id'];
        App::get('database')->delete('posts', $id);

        header('Location: /admin/posts');
    }

    public function edit()
    {

    $id = $_POST['id'];

    $publicacao = App::get('database')->selectOne('posts', $id);
    
    $caminhoimagem = $publicacao['imagem'] ?? '';

    if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK){
        
        $temporario = $_FILES['imagem']['tmp_name'];
        $nomeimagem = sha1(uniqid($_FILES['imagem']['name'], true)) . "." . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $caminhoimagem = "public/assets/" . $nomeimagem;

        move_uploaded_file($temporario, $caminhoimagem);

        if($publicacao && !empty($publicacao->imagem) && file_exists($publicacao->imagem)){
            unlink($publicacao->imagem);
        }
    }
    
    $id = $_POST['id'];
    $parameters = [
            'titulo' => $_POST['titulo'],
            'descricao' => $_POST['descricao'],
            'imagem' => $caminhoimagem,
            'data' => $_POST['data'],
            'usuarios_id' =>$_POST['usuarios_id']  //usar apos login
        ];

        App::get('database')->edit('posts', $id, $parameters);
        header('Location: /admin/posts');
    }
}
