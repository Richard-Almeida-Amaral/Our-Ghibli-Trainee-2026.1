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
class ControllerModalVisualizarUsuario
{

    public function ModalVisualizarUsuario()
    {
        return view('admin/ModalVisualizarUsuario');
    }

}
class ControllerVisualizaViewAdd{
    public function AddView(){
        return view('admin/add');
    }
}
class ControllerDeleteUser{
    public function DeleteUser(){
        return view('admin/delete');
    }
}
class ControllerEditUser{
    public function EditUser(){
        return view('admin/edit');
    }
}
class ControllerVisualizar{
    public function Visualizar(){
        return view('admin/view');
    }
}
class ControllerSiderbar{
    public function Sidebar(){
        return view('admin/sidebar');   
    }
}


