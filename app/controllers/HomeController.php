<?php

use app\models\User;
require './app/models/User.php';

use App\Func\DB;

class HomeController
{
    public function index()
    {
        $content = dirname(__FILE__) . '/../views/index.php';
        $judul = 'Home';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function notFound()
    {
        $content = dirname(__FILE__) . '/../views/404.php';
        $judul = '404';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function regist(){
        $content = dirname(__FILE__) . '/../views/auth/regist.php';
        $judul = 'Daftar Akun';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function login()
    {
        $content = dirname(__FILE__) . '/../views/auth/login.php';
        $judul = 'Login';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function ceker()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db = DB::getInstance();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute([':username' => $username]);
        $result = $stmt->fetch();
        
        $user = new User($result['username'], $result['nama_pengguna'], $result['profile_path'],$result['password'], $result['roles']);
        if (password_verify($password, $user->toArray()['password'])) {
            // ini buat set session dari hasil login
            $_SESSION['users'] = $user->toArray();
            $_SESSION['error'] = false;
            header('Location: /dashboard');
        } else {
            $_SESSION['error'] = true;
            header('Location: /login');
        }
    }



}