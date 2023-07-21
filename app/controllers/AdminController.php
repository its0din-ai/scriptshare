<?php

// namespace App\Models;
// require './app/func/DB.php';

use App\Models\User;
use App\Func\DB;

class AdminController
{
    public function index(){
        if(isset($_SESSION['users'])){
            if($_SESSION['users']['roles'] == 'admin'){
                $content = dirname(__FILE__) . '/../views/dashboard/user/manage-user.php';
                $judul = 'User Manager';
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
            else if($_SESSION['users']['roles'] == 'users'){
                $content = dirname(__FILE__) . '/../views/dashboard/home/dashboard-usr.php';
                $judul = 'Dashboard Users';
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
        }else{
            header('Location: /login');
        }
    }


}