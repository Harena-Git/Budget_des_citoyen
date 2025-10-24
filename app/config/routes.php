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

// Routes pour les autres pages (à implémenter)
$router->get('/perspectives-economiques', function() use ($app) {
	$app->render('pages/perspectives-economiques');
});

$router->get('/recettes', function() use ($app) {
	$app->render('pages/recettes');
});

$router->get('/depenses', function() use ($app) {
	$app->render('pages/depenses');
});

$router->get('/deficit', function() use ($app) {
	$app->render('pages/deficit');
});

// Exemples API (à garder pour référence)
$router->group('/api', function() use ($router, $app) {
	$Api_Example_Controller = new ApiExampleController($app);
	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
});