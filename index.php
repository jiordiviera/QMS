<?php
// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

// Chemin du script (excluant le nom du script)
$scriptPath = dirname($_SERVER['PHP_SELF']);

// Construction de l'URL de base
define("URL", "$protocol://$host/");


require './vendor/autoload.php';
$router = new AltoRouter();
//define('DEBUG_TIME', microtime(true));

$whoops = new Whoops\Run;
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler);
$whoops->register();

define('VIEW_PATH', './views');

$router->map('GET', '/', function () {
    $homeURL = $GLOBALS['router']->generate('home'); // Utilisez $GLOBALS pour accéder à $router
    require VIEW_PATH . '/home.view.php';
}, 'home');

$router->map('GET', '/contact', function () {
    $contactlURL = $GLOBALS['router']->generate('contact');
    require VIEW_PATH . '/contact.view.php';
}, 'contact');

$router->map('GET', '/about', function () {
    $aboutURL = $GLOBALS['router']->generate('about');
    require VIEW_PATH . '/about.view.php';
}, 'about');
$router->map('GET', '/service', function () {
    $serviceURL = $GLOBALS['router']->generate('service');
    require VIEW_PATH . '/service.view.php';
}, 'service');
$router->map('GET', '/[*:any]', function () {
    $erreurURL = $GLOBALS['router']->generate('service');
    require VIEW_PATH . '/404.view.php';
}, '404');

$match = $router->match();
$match['target']();