<?php

use App\Models\User;
use App\Func\DB;

class ManagerController
{
    public function indexScript(){
        if(isset($_SESSION['users'])){
            $content = dirname(__FILE__) . '/../views/dashboard/script/manage-script.php';
            $judul = 'Manage Scripts';
            include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }
    }

    public function indexShort(){
        if(isset($_SESSION['users'])){
            $content = dirname(__FILE__) . '/../views/dashboard/short/manage-short.php';
            $judul = 'Manage Shorts';
            include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }
    }

}