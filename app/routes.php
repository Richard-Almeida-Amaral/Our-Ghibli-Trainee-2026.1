<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

// Site
$router->get('', 'ControllerLandingPage@landingPage');
$router->get('login', 'ControllerLoginPage@loginPage');
$router->get('posts', 'ControllerPaginaDePosts@PaginaDePosts');
$router->get('postsI', 'ControllerPaginaIndependenteDePosts@PaginaIndependenteDePosts');
$router->get('footer', 'ControllerFooter@Footer');
$router->get('navbar', 'ControllerNavbar@Navbar');

// Modais

// criar e excluir post:
$router->post('criarpost', 'ControllerModalCriarPost@steal');

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
$router->get('users', 'ControllerAdmUsuarios@AdmUsuarios');
$router->get('publi', 'ControllerAdmPublicacoes@AdmPublicacoes');







