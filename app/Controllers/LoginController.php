<?php
namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function index()
    {
        return view('site/login');
    }

    
    public function execlogin(){
        $loginemail = $_POST['email'];
        $loginsenha = $_POST['senha'];

        $user = App :: get('database') -> verificalogin($loginemail,$loginsenha);

        if ($user != false) {
            $_SESSION['id'] = $user->id;
            header('Location:/admin');
        }else{
            $_SESSION['mensagem-erro'] = "Usuário e/ou senha incorretos";
            header('Location:/login');
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        header('Location:/login');
    }

}