<?php

// namespace App\Models;
// require './app/func/DB.php';

use App\Models\User;
use App\Func\DB;

class AdminController
{
    public function getAllUser(){
        $userModel = User::allUser();
        return $userModel;
    }

    public function index(){
        if(isset($_SESSION['users'])){
            if($_SESSION['users']['roles'] == 'admin'){
                $content = dirname(__FILE__) . '/../views/dashboard/user/manage-user.php';
                $judul = 'User Manager';
                $data = $this->getAllUser();
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

    
    public function editByAdmin($usrnm){
        if(isset($_SESSION['users'])){
            if($_SESSION['users']['roles'] == 'admin'){
                $content = dirname(__FILE__) . '/../views/dashboard/user/manager-edit.php';
                $judul = 'Edit User';
                $dat = User::where('username', $usrnm);
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

    public function update($dat){
        if(isset($_FILES['fotoBaru'])){
            if($_FILES['fotoBaru']['name'] != ""){
                $errors= array();
                $file_name = $_FILES['fotoBaru']['name'];
                $file_size =$_FILES['fotoBaru']['size'];
                $file_tmp =$_FILES['fotoBaru']['tmp_name'];
                $file_type=$_FILES['fotoBaru']['type'];
                
                $extensions= array("image/jpeg","image/jpg","image/png", "");
                if(in_array($file_type,$extensions)=== false){
                    $errors[]="Maaf, hanya file JPEG, JPG, dan PNG saja";
                }
                
                if($file_size > 2097152){
                    $errors[]='File size must be excately 2 MB';
                }
                
                if(empty($errors) == true){
                    $file_name = md5_file($file_tmp) . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
                    move_uploaded_file($file_tmp,"./public/img/profile/".$file_name);
                }else{
                    print_r($errors);
                }
            } else{
                $file_name = null;
            }
        }
        $tmpPass = $_POST['passBaru'];
        if($tmpPass == ""){
            $dat[4] = User::getParam('pass', $_POST['crntUser'])[0];
        }else{
            $dat[4] = password_hash($tmpPass, PASSWORD_DEFAULT);
        }
        
        if($file_name == null){
            $dat[3] = User::getParam('profile_path', $_POST['crntUser'])[0];
        }else{
            $dat[3] = '/public/img/profile/' . $file_name;
        }
        $usrModel = User::updateUserByAdmin($dat[0], $dat[1], $dat[2], $dat[3], $dat[4], $dat[5]);
        if($usrModel){
            $_SESSION['sukses-edit'] = $dat;
            header('Location: /manage/user');
        }else{
            $_SESSION['gagal-edit'] = true;
            header('Location: /manage/user');
        }
    }


}