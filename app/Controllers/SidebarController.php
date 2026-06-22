<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SidebarController
{

    public function index()
    {
        return view('admin/sidebar');
    }

    public function logout(){
        session_unset();
        session_destroy();
        header('Location:/');
    }
}
 