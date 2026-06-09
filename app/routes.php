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


// Admin

//Dashboard
$router->get('admin', 'DashboardController@index');

//Tabela de Publicacoes
$router->get('admin/posts', 'PostsController@index');

//Tabela de Usuarios
$router->get('admin/usuarios', 'UsuariosController@index');

$router->post('admin/usuarios/criar', 'ControllerUsuario@criar');
$router->post('admin/usuarios/excluir', 'ControllerAdmUsuarios@delete');


















// // criar e excluir post:
// $router->get('criarpost', 'ControllerModalCriarPost@ModalCriarPost');

// // visualizar e editar post:
// $router->get('visualizarpost', 'ControllerModalVisualizarPost@ModalVisualizarPost');

// // visualizar usuario
// $router->get('visualizarusuario', 'ControllerModalVisualizarUsuario@ModalVisualizarUsuario');

// // excluir usuario
// $router->get('excluirusuario', 'ControllerModalExcluirUsuario@ModalExcluirUsuario');

// // criar usuario
// $router->get('criarusuario', 'ControllerModalCriarUsuario@ModalCriarUsuario');

// // editar usuario
// $router->get('editarusuario', 'ControllerModalEditarUsuario@ModalEditarUsuario');


// // Admin

// $router->get('sidebar', 'ControllerSidebar@Sidebar');
// $router->get('dashboard', 'ControllerDashboard@Dashboard');
// $router->get('users', 'ControllerAdmUsuarios@AdmUsuarios');
// $router->get('publi', 'ControllerAdmPublicacoes@AdmPublicacoes');







