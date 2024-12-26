<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)','Home::image/$1');

$routes->group('admin',['filter' => ['group:admin']], function($routes){
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');
    
    $routes->get('daftar-helm', 'AdminController::daftarHelm');
    $routes->get('daftar-helm/tambah', 'AdminController::daftarHelmTambah');
    $routes->post('daftar-helm/create', 'AdminController::createHelm');
    $routes->get('daftar-helm/edit/(:num)', 'AdminController::daftarHelmEdit/$1');
    $routes->get('daftar-helm/change/(:num)', 'AdminController::changeHelm/$1');
    
    $routes->get('daftar-helm/hapus', 'AdminController::daftarHelmHapus');

    $routes->get('daftar-helm/hapus/(:num)', 'AdminController::hapusHelm/$1');
    $routes->get('admin/daftar-helm/hapus/(:num)', 'AdminController::hapusHelm/$1');
    $routes->post('admin/daftar-helm/hapus/(:num)', 'AdminController::hapusHelm/$1');
    $routes->post('daftar-helm/change/(:num)', 'AdminController::changeHelm/$1');

    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');
    
    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);
