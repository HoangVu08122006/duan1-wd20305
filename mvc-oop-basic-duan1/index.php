<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Common
require_once './commons/env.php';
require_once './commons/function.php';

// Controller
require_once './controllers/HomeController.php';

// Session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Route
$act = $_GET['act'] ?? '/';

// Xử lý route
switch ($act) {
    case '/':
        homeIndex();
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}
