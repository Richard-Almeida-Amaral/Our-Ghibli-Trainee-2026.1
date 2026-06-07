<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ControllerAdmPublicacoes
{

    public function AdmPublicacoes()
    {
        $publicacoes =  App ::get('database')->selectAll('posts');
        return view('admin/ADM-publicacoes',compact('publicacoes'));
    }

}
 