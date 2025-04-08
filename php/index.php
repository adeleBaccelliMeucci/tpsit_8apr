<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/controllers/AlunniController.php';
require __DIR__ . '/controllers/CertificazioniController.php';
require __DIR__ . '/includes/Db.php';

$app = AppFactory::create();

$app->get('/alunni/{id:\d+}/cert[/{id_cert:\d+}]', "CertificazioniController:index"); // senza o con l'id del certificato

$app->run();

