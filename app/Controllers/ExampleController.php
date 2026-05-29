<?php

namespace App\Controllers;

use App\Core\App;
use Exception;


// SITE

class ControllerLandingPage
{

    public function landingPage()
    {
        return view('site/landing-page');
    }

}

class ControllerLoginPage
{

    public function loginPage()
    {
        return view('site/pagina-login');
    }

}

class ControllerPaginaDePosts
{

    public function PaginaDePosts()
    {
        return view('site/paginaDePosts');
    }

}
 
class ControllerPaginaIndependenteDePosts
{

    public function PaginaIndependenteDePosts()
    {
        return view('site/pag-ind-posts');
    }

}
 

// ADMIN


class ControllerDashboard
{

    public function Dashboard()
    {
        return view('admin/dashboard');
    }

}
 
class ControllerAdmUsuarios
{

    public function AdmUsuarios()
    {
        return view('admin/ADM-usuarios');
    }

}
 