<?php

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

    public function shortIndex(){
        if(isset($_SESSION['users'])){
                $content = dirname(__FILE__) . '/../views/dashboard/short/index.php';
                $judul = 'Shortlinks';
                include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }
    }

    public function shortUpload(){
        if(isset($_SESSION['users'])){
            $username = $_SESSION['users']['username'];
            $shortController = new ShortController();
            $shortController->upload($username);
        }else{
            header('Location: /login');
        }
    }


}