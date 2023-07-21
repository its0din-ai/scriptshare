<?php

// namespace App\Models;
// require './app/func/DB.php';

use App\Models\ScriptModel;
use App\Func\DB;

class DashboardController
{
    public function index()
    {
        if(isset($_SESSION['users'])){
            if($_SESSION['users']['roles'] == 'admin'){
                $content = dirname(__FILE__) . '/../views/dashboard/home/dashboard-adm.php';
                $judul = 'Dashboard Admin';
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

    public function logout(){
        session_destroy();
        header('Location: /login');
    }

    public function scriptIndex(){
        if(isset($_SESSION['users'])){
                $content = dirname(__FILE__) . '/../views/dashboard/script/index.php';
                $judul = 'Script Sharing';
                $scriptController = new ScriptController();
                $script = $scriptController->getPost();
                
                include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }
    
    }
    public function personalIndex(){
        if(isset($_SESSION['users'])){
                $content = dirname(__FILE__) . '/../views/dashboard/script/personal.php';
                $judul = $_SESSION['users']['username'] . ' Script';
                $scriptController = new ScriptController();
                $prv = $scriptController->getPrivatePost();
                
                include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }
    }

    



    public function shortIndex(){
        if(isset($_SESSION['users'])){
                $content = dirname(__FILE__) . '/../views/dashboard/short/index.php';
                $judul = 'Shortlinks';
                include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }
    }

}