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
            session_start();
            $_SESSION['id'] = $user->id;
            header('Location:/admin');
        }else{
            echo('Teste');
        }

    }

}