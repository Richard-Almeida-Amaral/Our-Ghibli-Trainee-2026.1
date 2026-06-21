<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;


$router = new Router;


// Site

//Landing Page
$router->get('', 'LandingPageController@index');

//Pagina de Posts
$router->get('posts', 'PaginaPostsController@index');

//Pagina Individual de Posts
$router->get('post', 'PaginaIndividualPostsController@index');

//Pagina de Login
$router->get('login', 'LoginController@index');

$router->post('login', 'LoginController@execlogin');

$router->get('sidebar', 'SidebarController@index');

$router->get('aux', 'ControllerAUX@index');

$router->post('logout', 'LoginController@logout');
// Admin
$router->post('admin/usuarios/cadastro', 'UsuariosController@cadastro');
//Dashboard
$router->get('admin', 'DashboardController@index');

//Tabela de Publicacoes
$router->get('admin/posts', 'PostController@index');
$router->post('admin/posts/criar', 'PostController@criar');
$router->post('admin/posts/edit', 'PostController@edit');

//Tabela de Usuarios
$router->get('admin/usuarios', 'UsuariosController@index');

$router->post('admin/usuarios/criar', 'UsuariosController@criar');
$router->post('admin/usuarios/excluir', 'UsuariosController@delete');
$router->post('admin/usuarios/edit', 'UsuariosController@edit');
$router->post('admin/posts/excluir', 'PostController@delete');

