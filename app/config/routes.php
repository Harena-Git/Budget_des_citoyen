<?php

use app\controllers\HomeController;
use app\controllers\ApiExampleController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Route principale - Page d'accueil
$router->get('/', function() use ($app) {
	$homeController = new HomeController($app);
	$homeController->index();
});

// Import des contrôleurs
use app\controllers\RecettesController;
use app\controllers\DepensesController;
use app\controllers\DeficitController;

// Route perspectives économiques
$router->get('/perspectives-economiques', function() use ($app) {
    $app->render('pages/perspectives-economiques');
});

// Routes Recettes
$router->get('/recettes', function() use ($app) {
    $controller = new RecettesController($app);
    $controller->index();
});

$router->get('/recettes-fiscales', function() use ($app) {
    $controller = new RecettesController($app);
    $controller->fiscales();
});

$router->get('/recettes-douanes', function() use ($app) {
    $controller = new RecettesController($app);
    $controller->douanes();
});

$router->get('/recettes-non-fiscales', function() use ($app) {
    $controller = new RecettesController($app);
    $controller->nonFiscales();
});

$router->get('/recettes-dons', function() use ($app) {
    $controller = new RecettesController($app);
    $controller->dons();
});

// Routes Dépenses
$router->get('/depenses', function() use ($app) {
    $controller = new DepensesController($app);
    $controller->index();
});

$router->get('/depenses-nature', function() use ($app) {
    $controller = new DepensesController($app);
    $controller->nature();
});

$router->get('/depenses-ministeres', function() use ($app) {
    $controller = new DepensesController($app);
    $controller->ministeres();
});

$router->get('/depenses-investissements', function() use ($app) {
    $controller = new DepensesController($app);
    $controller->investissements();
});

// Routes Déficit
$router->get('/deficit', function() use ($app) {
    $controller = new DeficitController($app);
    $controller->index();
});

$router->get('/deficit-situation', function() use ($app) {
    $controller = new DeficitController($app);
    $controller->situation();
});

$router->get('/deficit-financement', function() use ($app) {
    $controller = new DeficitController($app);
    $controller->financement();
});

// Exemples API (à garder pour référence)
$router->group('/api', function() use ($router, $app) {
	$Api_Example_Controller = new ApiExampleController($app);
	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
});