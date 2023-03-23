<?php
include 'src/backend/autoload.php';
include 'config.php';

error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$router = new Router();

$router->get('', 'ProductList::index');
$router->get('/products/get', 'ProductList::show');

$router->post('/products/add', 'ProductList::add');
$router->post('/products/delete', 'ProductList::delete');

$router->check();
