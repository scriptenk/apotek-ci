<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['obat'] = 'home/obat';
$route['obat/(:any)'] = 'home/obat/$1';
$route['cek'] = 'home/cek';
$route['konfirmasi'] = 'home/konfirmasi';
$route['beli'] = 'home/beli';
$route['beli/(:any)'] = 'home/tambah_keranjang/$1';
$route['print_struk/(:any)'] = 'home/print_struk/$1';

//AJAX
$route['update_jumlah'] = 'home/update_jumlah';
$route['del_item'] = "home/del_item";

//Admin
$route['admin'] = 'admin';
$route['login'] = 'admin/login';
$route['admin/logout'] = 'admin/logout';
$route['admin/transaksi'] = 'admin/transaksi';
$route['admin/transaksi/(:any)'] = 'admin/transaksi/$1';
$route['admin/obat'] = 'admin/daftar_obat';
$route['admin/obat/edit/(:any)'] = 'admin/edit_obat/$1';
$route['admin/obat/tambah'] = 'admin/tambah_obat';
$route['admin/obat/hapus/(:any)'] = 'admin/hapus_obat/$1';
$route['admin/konfirmasi'] = 'admin/konfirmasi';
$route['admin/konfirmasi/(:any)/confirm'] = 'admin/do_konfirmasi/$1';
$route['admin/konfirmasi/(:any)'] = 'admin/konfirmasi/$1';

$route['default_controller'] = 'home';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
