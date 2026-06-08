<?php

namespace App\Controllers;  
use App\Controllers\ExampleController;
use App\Core\Router;

$router = new Router();

// Site
$router->get('', 'ControllerLandingPage@landingPage');
$router->get('login', 'ControllerLoginPage@loginPage');
$router->get('posts', 'ControllerPaginaDePosts@PaginaDePosts');
$router->get('postsI', 'ControllerPaginaIndependenteDePosts@PaginaIndependenteDePosts');
$router->get('footer', 'ControllerFooter@Footer');
$router->get('navbar', 'ControllerNavbar@Navbar');

// Modais

// criar e excluir post:
$router->get('criarpost', 'ControllerModalCriarPost@ModalCriarPost');

// visualizar e editar post:
$router->get('visualizarpost', 'ControllerModalVisualizarPost@ModalVisualizarPost');

// visualizar usuario
$router->get('visualizarusuario', 'ControllerModalVisualizarUsuario@ModalVisualizarUsuario');

// excluir usuario
$router->get('excluirusuario', 'ControllerModalExcluirUsuario@ModalExcluirUsuario');

// criar usuario
$router->get('criarusuario', 'ControllerModalCriarUsuario@ModalCriarUsuario');

// editar usuario
$router->get('editarusuario', 'ControllerModalEditarUsuario@ModalEditarUsuario');


// Admin

$router->get('sidebar', 'ControllerSidebar@Sidebar');
$router->get('dashboard', 'ControllerDashboard@Dashboard');
$router->get('users', 'ControllerAdmUsuarios@index');
$router->get('publi', 'ControllerAdmPublicacoes@AdmPublicacoes');

$router->get('app', 'ControllerUsuario@index');

$router->post('users/criar', 'ControllerUsuario@criar');
$router->post('users/delete', 'ControllerAdmUsuarios@deletar');







