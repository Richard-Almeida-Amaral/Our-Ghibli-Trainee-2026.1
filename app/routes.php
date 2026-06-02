<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('', 'ControllerLandingPage@landingPage');
$router->get('login-page', 'ControllerLoginPage@loginPage');
$router->get('posts', 'ControllerPaginaDePosts@PaginaDePosts');
$router->get('pagina-independencia-de-posts', 'ControllerPaginaIndependenteDePosts@PaginaIndependenteDePosts');
$router->get('dashboard', 'ControllerDashboard@Dashboard');
$router->get('ADM-usuarios', 'ControllerAdmUsuarios@AdmUsuarios');
$router->get('postsADM', 'ControllerModalVisualizarUsuario@ModalVisualizarUsuario');
$router->get('cadastro', 'ControllerVisualizaViewAdd@AddView');
$router->get('delete', 'ControllerDeleteUser@DeleteUser');
$router->get('editar', 'ControllerEditUser@EditUser');
$router->get('visualizar', 'ControllerVisualizar@Visualizar');
$router->get('sidebar', 'ControllerSiderbar@Sidebar');
