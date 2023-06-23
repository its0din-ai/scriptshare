<?php

require './app/controllers/HomeController.php';
require './app/controllers/DashboardController.php';
require './app/func/route.php';

// Rute GET Biasa
get('/', function() {
    $homeController = new HomeController();
    $homeController->index();
});




// Rute ke fungsi-fungsi Register
get('/regist', function() {
    $homeController = new HomeController();
    $homeController->regist();
});
post('/regist', function() {
    $homeController = new HomeController();
    $homeController->daftar();
});
post('/cekuser', function($request, $response) {
    $username = $_POST['username'];
    $homeController = new HomeController();
    $usernameAda = $homeController->cekUsername($username);

    if ($usernameAda) {
        echo 'exist';
    } else {
        echo 'not';
    }

    return $response;
});



// Rute ke fungsi-fungsi Login
get('/login', function() {
    $homeController = new HomeController();
    $homeController->login();
    unset($_SESSION['stats']);
});
post('/login', function($request, $response) {
    $homeController = new HomeController();
    $login = $homeController->loginCeker();

    if(!$login){
        $_SESSION['stats'] = "salah";
        header('Location: /login');
    }else{
        unset($_SESSION['stats']);
        $login;
    }

});

get('/logout', function() {
    $dashboardcontroller = new DashboardController();
    $dashboardcontroller->logout();
});




// Rute ke fungsi-fungsi Fitur
get('/dashboard', function() {
    $dashboardController = new DashboardController();
    $dashboardController->index();
});

get('/dashboard/script', function() {
    $dashboardController = new DashboardController();
    $dashboardController->scriptIndex();
});

get('/dashboard/short', function() {
    $dashboardController = new DashboardController();
    $dashboardController->shortIndex();
});




// Handling kalo Not Found
get('/404', function() {
    $homeController = new HomeController();
    $homeController->notFound();
});
http_response_code(404);
header('Location: /404');
