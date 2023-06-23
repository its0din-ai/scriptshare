<?php


class DashboardController
{
    public function index()
    {
        if(isset($_SESSION['users'])){
            if($_SESSION['users']['roles'] == 'admin'){
                $content = dirname(__FILE__) . '/../views/home/dashboard-adm.php';
                $judul = 'Dashboard Admin';
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
            else if($_SESSION['users']['roles'] == 'users'){
                $content = dirname(__FILE__) . '/../views/home/dashboard-usr.php';
                $judul = 'Dashboard Users';
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
        }else{
            $content = dirname(__FILE__) . '/../views/404.php';
            $judul = '404';
            include dirname(__FILE__) . '/../views/layout/app.php';
        }

    }

    public function logout(){
        session_destroy();
        header('Location: /login');
    }

    
    public function notFound()
    {
        $content = dirname(__FILE__) . '/../views/404.php';
        $judul = '404';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

}