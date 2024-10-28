<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->addRedirect('/', 'barang');

$routes->get('create-db', function(){
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('ICS')) {
        echo 'Database created!';
    }
});

$routes->get('AktivaSupport', 'AktivaSupport::index');
$routes->get('AktivaSupport/add', 'AktivaSupport::create');
$routes->get('AktivaSupport/datang', 'AktivaSupport::aktivaDatang');
$routes->post('AktivaSupport', 'AktivaSupport::store');

