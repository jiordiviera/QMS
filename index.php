<?php

// Définir une constante pour empêcher l'accès direct aux fichiers
define('ACCESS', true);

// Vérification pour empêcher l'accès au dossier du projet
if (defined('ACCESS') && ACCESS === true && $_SERVER['REQUEST_URI'] !== '/' && file_exists(__DIR__ . $_SERVER['REQUEST_URI'])) {
//    require '../views/404.view.php';
    exit('404 Not Found');
}


// Détection du protocole (http ou https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

// Nom de l'hôte (domaine)
$host = $_SERVER['HTTP_HOST'];

// Chemin du script (excluant le nom du script)
$scriptPath = dirname($_SERVER['PHP_SELF']);
/*
// Construction de l'URL de base
define("URL", "$protocol://$host/");*/

require './vendor/autoload.php';
$router = new AltoRouter();

$whoops = new Whoops\Run;
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler);
$whoops->register();

define('VIEW_PATH', realpath('./views'));

$router->map('GET', '/', function () {
    $homeURL = $GLOBALS['router']->generate('home');
    require VIEW_PATH . '/home.view.php';
}, 'home');

$router->map('GET', '/contact', function () {
    $contactURL = $GLOBALS['router']->generate('contact');
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

$router->map('GET', '/error', function () {
    $errorURL = $GLOBALS['router']->generate('error');
    require VIEW_PATH . '/404.view.php';
}, 'error');


$router->map('GET', '/[*:any]', function () {
    $erreurURL = $GLOBALS['router']->generate('404');
    require VIEW_PATH . '/404.view.php';
}, '404');

$match = $router->match();

if ($match && in_array($match['name'], ['home', 'contact', 'about', 'service', '404'])) {
    $match['target']();
} else {
//    header("HTTP/1.0 404 Not Found");
    require VIEW_PATH . '/404.view.php';
}
