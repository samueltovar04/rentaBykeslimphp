<?php
// DIC configuration

$container = $app->getContainer();

// Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new \Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};
// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages;
};


// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};
$container['App\Controller\BicicletaAlquilerController'] = function ($c) {
    return new App\Controller\BicicletaAlquilerController($c);
};

$container['BicicletaDaoImpl'] = function ($c) {
    return new App\Dao\BicicletaDaoImpl();
};

$container['PersonaDaoImpl'] = function ($c) {
    return new App\Dao\PersonaDaoImpl();
};

$container['AlquilerImpl'] = function ($c) {
    return new App\Services\AlquilerImpl();
};