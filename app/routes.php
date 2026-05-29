<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

$router->get('', 'ControllerLandingPage@landingPage');
$router->get('login-page', 'ControllerLoginPage@loginPage');
$router->get('pagina-de-posts', 'ControllerPaginaDePosts@PaginaDePosts');
$router->get('pagina-independencia-de-posts', 'ControllerPaginaIndependenteDePosts@PaginaIndependenteDePosts');
$router->get('dashboard', 'ControllerDashboard@Dashboard');
$router->get('ADM-usuarios', 'ControllerAdmUsuarios@AdmUsuarios');
