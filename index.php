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

$router->map('GET', '/table', function () {
    $contactlURL = $GLOBALS['router']->generate('table');
    require VIEW_PATH . '/table.view.php';
}, 'table');

$router->map('GET', '/account', function () {
    $aboutURL = $GLOBALS['router']->generate('account');
    require VIEW_PATH . '/account.view.php';
}, 'account');
$router->map('GET', '/signup', function () {
    $aboutURL = $GLOBALS['router']->generate('signup');
    require VIEW_PATH . '/auth/signUp.view.php';
}, 'signup');
$router->map('GET', '/login', function () {
    $aboutURL = $GLOBALS['router']->generate('login');
    require VIEW_PATH . '/auth/logIn.view.php';
}, 'login');
$router->map('GET', '/[*:any]', function () {
    $erreurURL = $GLOBALS['router']->generate('erreur');
    require VIEW_PATH . '/404.view.php';
}, '404');

$match = $router->match();
$match['target']();