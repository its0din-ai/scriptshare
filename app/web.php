<?php

require './app/controllers/AdminController.php';
require './app/controllers/HomeController.php';
require './app/controllers/DashboardController.php';
require './app/controllers/ScriptController.php';
require './app/controllers/ShortController.php';
require './app/controllers/UserController.php';
require './app/controllers/ManagerController.php';

require './app/func/route.php';

use App\Models\User;

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

// DASHBOARD ROUTE
get('/dashboard', function() {
    $dashboardController = new DashboardController();
    $dashboardController->index();
});

get('/dashboard/script', function() {
    $dashboardController = new DashboardController();
    $dashboardController->scriptIndex();
});
post('/dashboard/script', function() {
    if($_POST['judul'] == ""){
        $data['judul_script'] = "Tidak ada Judul";
        $data['konten_script'] = $_POST['konten'];
        $data['id_user'] = $_SESSION['users']['username'];
        $data['visibility'] = $_POST['visibility'];
    }else{
        $data['judul_script'] = $_POST['judul'];
        $data['konten_script'] = $_POST['konten'];
        $data['id_user'] = $_SESSION['users']['username'];
        $data['visibility'] = $_POST['visibility'];
    }
    
    $scriptController = new ScriptController();
    $scriptController->upload($data);
});

get('/dashboard/script/personal', function() {
    $dashboardController = new DashboardController();
    $dashboardController->personalIndex();
});

get('/dashboard/shortlink', function() {
    $dashboardController = new DashboardController();
    $dashboardController->shortIndex();
});

post('/dashboard/shortlink', function() {
    $dashboardController = new DashboardController();
    $dashboardController->shortUpload();
});

get('/manage/short', function() {
    $shortController = new ShortController();
    $shortController->shortPersonal();
});

if ($_SERVER['REQUEST_URI'] == '/sh' || strpos($_SERVER['REQUEST_URI'], '/sh/') === 0) {
    $slug = substr($_SERVER['REQUEST_URI'], 4);
    $shortController = new ShortController();
    $shortController->redirect($slug);
}


// Route untuk handle edit/delete script dan short
if ($_SERVER['REQUEST_URI'] == '/script' || strpos($_SERVER['REQUEST_URI'], '/script/') === 0) {
    $slug = substr($_SERVER['REQUEST_URI'], 8);
    $scriptController = new ScriptController();
    $scriptController->script($slug);
}
else if ($_SERVER['REQUEST_URI'] == '/edit/sc' || strpos($_SERVER['REQUEST_URI'], '/edit/sc/') === 0) {
    $slug = substr($_SERVER['REQUEST_URI'], 9);
    $scriptController = new ScriptController();
    $scriptController->edit_script($slug);
}
else if ($_SERVER['REQUEST_URI'] == '/edit/sh' || strpos($_SERVER['REQUEST_URI'], '/edit/sh/') === 0) {
    $slug = substr($_SERVER['REQUEST_URI'], 9);
    // edit short
}
else if ($_SERVER['REQUEST_URI'] == '/hapus/sh' || strpos($_SERVER['REQUEST_URI'], '/hapus/sh/') === 0) {
    $slug = substr($_SERVER['REQUEST_URI'], 10);
    // hapus short
}

post('/update/sc', function() {
    $scriptController = new ScriptController();
    $scriptController->update();
});
post('/hapus/sc', function() {
    $slug = $_POST['slug'];
    $scriptController = new ScriptController();
    $scriptController->hapus_script($slug);
});


// Handler Edit
get('/dashboard/edit', function() {
    $userController = new UserController();
    $userController->index($_SESSION['users']['username']);   
});
post('/dashboard/edit', function() {
    $userController = new UserController();
    $userController->update();
});

post('/cekpass', function($request, $response) {
    $passwd = $_POST['passwd'];
    $username = $_POST['username'];
    $userController = new UserController();
    $passSama = $userController->cekPasswd($passwd, $username);

    if ($passSama) {
        echo 'match';
    } else {
        echo 'not';
    }

    return $response;
});

// MANAGER ROUTE
get('/manage/user', function() {
    $adminController = new AdminController();
    $adminController->index();
});

if ($_SERVER['REQUEST_URI'] == '/manage/user' || strpos($_SERVER['REQUEST_URI'], '/manage/user') === 0) {
    $usrnm = substr($_SERVER['REQUEST_URI'], 13);
    $adminController = new AdminController();
    $adminController->editByAdmin($usrnm);
}
// post edit
post('/update/user', function() {
    // create new array of post data username, nama_lengkap, foto, password, roles
    $crntUser = $_POST['crntUser'];
    if($_POST['passBaru'] == "" && $_FILES['fotoBaru'] == ""){
        $passUser = User::getParam('pass', $_POST['username']);
        $profile = User::getParam('profile_path', $_POST['username']);
        $dat = array($crntUser, $_POST['username'], $_POST['nama_baru'], $profile, $passUser, $_POST['roles']);
        $adminController = new AdminController();
        $adminController->update($dat);
    }
    else if($_POST['passBaru'] == ""){
        $passUser = User::getParam('pass', $_POST['username']);
        $dat = array($crntUser, $_POST['username'], $_POST['nama_baru'], $_FILES['fotoBaru'], $passUser, $_POST['roles']);
        $adminController = new AdminController();
        $adminController->update($dat);
    }
    else if($_FILES['fotoBaru'] == ""){
        $profile = User::getParam('profile_path', $_POST['username']);
        $dat = array($crntUser, $_POST['username'], $_POST['nama_baru'], $profile, $_POST['pass'], $_POST['roles']);
        $adminController = new AdminController();
        $adminController->update($dat);
    }
    else{
        $dat = array($crntUser, $_POST['username'], $_POST['nama_baru'], $_FILES['fotoBaru'], $_POST['passBaru'], $_POST['roles']);
        $adminController = new AdminController();
        $adminController->update($dat);
    }
});

get('/delete/user', function() {
    header('Location: /manage/user');
});

if ($_SERVER['REQUEST_URI'] == '/delete/user' || strpos($_SERVER['REQUEST_URI'], '/delete/user') === 0) {
    $usrnm = substr($_SERVER['REQUEST_URI'], 13);
    $adminController = new AdminController();
    $adminController->deleteAkun($usrnm);
    
};

get('/manage/script', function() {
    $managerController = new ManagerController();
    $managerController->indexScript();
});

get('/manage/short', function() {
    $managerController = new ManagerController();
    $managerController->indexShort();
});

get('/public', function() {
    http_response_code(403);
});

// // Handling kalo Not Found
// get('/404', function() {
//     $homeController = new HomeController();
//     $homeController->notFound();
// });
// http_response_code(404);
// header('Location: /404');
