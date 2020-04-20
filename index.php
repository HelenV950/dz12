<?php
include_once 'vendor/autoload.php';

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

use App\HTTP\Controllers\Admin\DashboardController;
use App\HTTP\Controllers\Admin\OrdersController;
use App\HTTP\Controllers\MainController;
use App\HTTP\Helpers\ImageHelper;
use Models\Order;
use Models\Product;
use Models\User;

$mainController = new MainController();
$dashboardController = new DashboardController();
$ordercontroller = new OrdersController();
$imageHelper = new ImageHelper();
$order = new Order();
$product = new Product();
$user = new User();