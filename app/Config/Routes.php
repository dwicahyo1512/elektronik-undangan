<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();

    if ($forge->createDatabase('E_undangan')) {
        echo 'Database created!';
    }
});

$routes->get('/', 'Home::index', ['as' => 'landingpage']);
$routes->get('reservasi_sekarang', 'Home::order', ['as' => 'order']);
$routes->post('simpan_reservasi_sekarang', 'Home::save_order', ['as' => 'save_order']);
$routes->get('galeri_sw', 'Home::galeri_sw', ['as' => 'galeri_sw']);
$routes->get('login', 'Auth::index', ['as' => 'login']);
$routes->get('register', 'Auth::register', ['as' => 'register']);
$routes->get('activation', 'Auth::activation', ['as' => 'activation']);
$routes->get('forgot_pwd', 'Auth::forgot_password', ['as' => 'forgot_password']);
$routes->get('reset_pwd', 'Auth::reset_password', ['as' => 'reset_password']);

$routes->group('superadmin', ['filter' => 'role:superadmin'], static function ($routes) {
    $routes->get('dashboard', 'Superadmin::index', ['as' => 'dashboard']);
    $routes->get('akses_pengguna', 'Superadmin::daftar_akses_pengguna', ['as' => 'daftar_pengguna']);
    $routes->get('detail_pengguna/(:num)', 'Superadmin::detail_pengguna/$1', ['as' => 'detail_pengguna']);
    $routes->get('buat_pengguna', 'Superadmin::buat_pengguna', ['as' => 'buat_pengguna']);
    $routes->post('simpan_pengguna', 'Superadmin::simpan_pengguna', ['as' => 'simpan_pengguna']);
    $routes->get('hapus_pengguna/(:num)', 'Superadmin::hapus_pengguna/$1', ['as' => 'hapus_pengguna']);
    $routes->get('resetpas_pengguna/(:num)', 'Superadmin::resetpas_pengguna/$1', ['as' => 'resetpas_pengguna']);
    $routes->presenter('kategori', ['controller' => 'Kategori']);
    $routes->presenter('tag', ['controller' => 'tag']);
    $routes->presenter('blog', ['controller' => 'blog']);
    $routes->presenter('produk', ['controller' => 'produk']);
    $routes->presenter('hadiah', ['controller' => 'hadiah']);
});

$routes->group('admin', ['filter' => 'role:admin,superadmin'], static function ($routes) {
    $routes->presenter('reservasi', ['controller' => 'reservasi']);
    $routes->get('faktur_cetak/(:num)', 'Admin::cetak_reservasi/$1', ['as' => 'cetak_reservasi']);
    $routes->get('klaim_hadiah', 'Admin::daftar_klaim_hadiah', ['as' => 'klaim_hadiah']);
});

$routes->group('user', static function ($routes) {
    $routes->get('profil', 'User::profil', ['as' => 'profil']);
    $routes->post('gantipas_pengguna', 'User::gantipas_pengguna', ['as' => 'gantipas_pengguna']);
    $routes->get('galeri_produk', 'User::index', ['as' => 'galeri']);
    $routes->get('hadiah_pengguna', 'User::klaim_hadiah', ['as' => 'hadiah_pengguna']);
    $routes->post('klaim_hadiah_pengguna', 'User::tambah_klaim', ['as' => 'tambah_klaim_hadiah']);
    $routes->presenter('reservasi_pengguna', ['controller' => 'pesanan']);
    $routes->get('faktur_cetak/(:num)', 'User::cetak_reservasi/$1', ['as' => 'cetak_reservasi_pengguna']);
    // CONTACT
    $routes->get('contacts/export', 'Contacts::export', ['filter' => 'isLoggedIn']);
    $routes->post('contacts/import', 'Contacts::import', ['filter' => 'isLoggedIn']);
    $routes->resource('contacts', ['filter' => 'isLoggedIn']);
    // UNDANGAN
    $routes->get('undangan/export', 'Undangan::export', ['filter' => 'isLoggedIn']);
    $routes->post('undangan/import', 'Undangan::import', ['filter' => 'isLoggedIn']);
    $routes->resource('undangan', ['filter' => 'isLoggedIn']);
    // ACARA
    $routes->get('acara', 'Acara::index');
    $routes->get('acara/add', 'Acara::create');
    $routes->post('acara/step2', 'Acara::step2');
    $routes->post('acara/step3', 'Acara::step3');
    $routes->post('acara/finish', 'Acara::finish');
    $routes->get('acara/edit/(:any)', 'Acara::edit/$1');
    $routes->put('acara/(:any)', 'Acara::update/$1');
    $routes->delete('acara/(:segment)', 'Acara::destroy/$1');
});

// $routes->get('login', 'Auth::login');
// $routes->get('login/register', 'Auth::register');
// $routes->post('register', 'Auth::registerProcess');

// $routes->get('login/forgot', 'Auth::forgot');
// $routes->post('forgot_password', 'Auth::forgot_password');

// $routes->get('forgot_password/(:any)', 'Auth::pwToken/$1');
// $routes->put('forgot_password/proses/(:any)', 'Auth::Processforgotpw/$1');

// $routes->get('/', 'Home::index');
// $routes->addRedirect('/', 'home');

// $routes->get('profile', 'Profile::index');
// $routes->post('profile/edit', 'Profile::update');

// $routes->get('acara', 'Acara::index');
// $routes->get('acara/add', 'Acara::create');
// $routes->post('acara', 'Acara::store');
// $routes->get('acara/edit/(:any)', 'Acara::edit/$1');
// $routes->put('acara/(:any)', 'Acara::update/$1');
// $routes->delete('acara/(:segment)', 'Acara::destroy/$1');

// $routes->get('groups/trash', 'Groups::trash');
// $routes->get('groups/restore/(:any)', 'Groups::restore/$1');
// $routes->get('groups/restore', 'Groups::restore');
// $routes->delete('groups/delete2/(:any)', 'Groups::delete2/$1');
// $routes->delete('groups/delete2', 'Groups::delete2');
// $routes->presenter('groups', ['filter' => 'isLoggedIn']);


// $routes->get('contacts/export', 'Contacts::export', ['filter' => 'isLoggedIn']);
// $routes->post('contacts/import', 'Contacts::import', ['filter' => 'isLoggedIn']);
// $routes->resource('contacts', ['filter' => 'isLoggedIn']);


// $routes->get('undangan/export', 'Undangan::export', ['filter' => 'isLoggedIn']);
// $routes->post('undangan/import', 'Undangan::import', ['filter' => 'isLoggedIn']);
// $routes->resource('undangan', ['filter' => 'isLoggedIn']);

// $routes->get('pricing', 'Pricing::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
