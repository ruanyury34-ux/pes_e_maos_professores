<?php


//Carrega o Model e o Controller para podemos usá-los
require  __DIR__ . '/app/models/Site.php';
require  __DIR__ . '/app/Controllers/siteController.php';


$pagina = $_GET['pagina'] ?? 'home';


$Controller = new siteController();

switch ($pagina) {
    case 'home':
        $Controller->home();
        break;
    case 'contato':
        $Controller->contato();
        break;

    default:
    $Controller->naoEncontrada();
        break;

    }