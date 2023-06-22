<?php

require './app/controllers/HomeController.php';
require './app/controllers/DashboardController.php';
require './app/func/route.php';

get('/', function() {
    $homeController = new HomeController();
    $homeController->index();
});

get('/login', function() {
    $homeController = new HomeController();
    $homeController->login();
});
post('/login', function() {
    $homeController = new HomeController();
    $homeController->ceker();
});

get('/logout', function() {
    $dashboardcontroller = new DashboardController();
    $dashboardcontroller->logout();
});

get('/dashboard', function() {
    $dashboardController = new DashboardController();
    $dashboardController->index();
});

get('/404', function() {
    $homeController = new HomeController();
    $homeController->notFound();
});


// Handle URL yang tidak ditemukan (404)
http_response_code(404);
header('Location: /404');
