<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerLoginPage
{

    public function loginPage()
    {
        return view('site/pagina-login');
    }

    public function execlogin(){
        $loginemail = $_POST['email'];
        $loginsenha = $_POST['senha'];

        $user = App :: get('database') -> verificalogin($loginemail,$loginsenha);

        if ($user != false) {
            session_start();
            $_SESSION['id'] = $user->id;
            header('Location:/dashboard');
        }else{
            echo('Teste');
        }

    }
}