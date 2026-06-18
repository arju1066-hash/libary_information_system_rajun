<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/list/books', 'BookController::index');
$routes->get('/create/book', 'BookController::create');
$routes->post('/create/book', 'BookController::store');
$routes->get('/edit/book/(:num)', 'BookController::edit/$1');
$routes->post('/update/book', 'BookController::update');
$routes->post('/delete/book/(:num)', 'BookController::delete/$1');

$routes->get('/list/books/table', 'BookController::ajaxTable');
$routes->get('/ajax/create/book', 'BookController::ajaxCreate');

$routes->get('list/members', 'MemberController::index');
$routes->get('/create/member', 'MemberController::create');
$routes->post('/create/member', 'MemberController::store');
$routes->get('/edit/member/(:num)', 'MemberController::edit/$1');
$routes->post('/update/member', 'MemberController::update');
$routes->post('/delete/member/(:num)', 'MemberController::delete/$1');

$routes->get('/laporan/buku', 'LaporanController::buku');
$routes->get('/laporan/cetak-buku', 'LaporanController::cetakBuku');

$routes->get('/laporan/label-buku', 'LaporanController::labelBuku');
$routes->get('/laporan/cetak-label-buku', 'LaporanController::cetakLabelBuku');
$routes->get('/laporan/cetak-label-buku/(:num)', 'LaporanController::cetakLabelSatu/$1');

$routes->get('/laporan/member', 'LaporanController::member');
$routes->get('/laporan/cetak-member', 'LaporanController::cetakMember');

$routes->get('/laporan/label-member', 'LaporanController::labelMember');
$routes->get('/laporan/cetak-label-member', 'LaporanController::cetakLabelMember');
$routes->get('/laporan/cetak-label-member/(:num)', 'LaporanController::cetakLabelSatuMember/$1');