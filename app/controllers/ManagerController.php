<?php

use App\Models\User;
use App\Func\DB;
use App\Models\ScriptModel;

class ManagerController
{
    public function getAllScript(){
        $userModel = ScriptModel::getAllScript();
        return $userModel;
    }

    public function getAllScriptBy($username){
        $userModel = ScriptModel::getAllScriptBy($username);
        return $userModel;
    }

    public function indexScript(){
        if(isset($_SESSION['users'])){
            if ($_SESSION['users']['roles'] == "admin"){
                $content = dirname(__FILE__) . '/../views/dashboard/script/manage-script.php';
                $judul = 'Manage Scripts';
                $data = $this->getAllScript();
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
            else{
                $content = dirname(__FILE__) . '/../views/dashboard/script/manage-script.php';
                $judul = 'Manage Scripts';
                $data = $this->getAllScriptBy($_SESSION['users']['username']);
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
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