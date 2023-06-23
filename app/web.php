<?php

require './app/controllers/HomeController.php';
require './app/controllers/DashboardController.php';
require './app/func/route.php';

get('/', function() {
    $homeController = new HomeController();
    $homeController->index();
});




get('/regist', function() {
    $homeController = new HomeController();
    $homeController->regist();
});
post('/regist', function() {
    $homeController = new HomeController();
    $homeController->daftar();
});
post('/cekuser', function($request, $response) {
    // Retrieve the username from the request body
    // $data = $request->getParsedBody();
    $username = $_POST['username'];

    // Execute the cekUser() function
    $homeController = new HomeController();
    $isAvailable = $homeController->cekUsername($username);

    // Prepare the response based on the availability
    if ($isAvailable) {
        echo 'available';
    } else {
        echo 'unavailable';
    }

    return $response;
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
