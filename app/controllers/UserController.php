<?php
require_once './app/models/ScriptModel.php';
require_once './app/models/ShortModel.php';

use App\Models\ScriptModel;
use App\Models\ShortModel;
use App\Models\User;
use App\Func\DB;

class UserController
{
    public function index($usrnm)
    {
        if(isset($_SESSION['users'])){
            $content = dirname(__FILE__) . '/../views/dashboard/user/edit.php';
            $judul = 'Edit Profil';
            $userdata = User::where('username', $usrnm);
            include dirname(__FILE__) . '/../views/layout/app.php';
        }else{
            header('Location: /login');
        }

    }

    public function totalScript(){
        $usrnm = $_SESSION['users']['username'];
        $totalScript = ScriptModel::getTotalPost($usrnm);
        return $totalScript;
    }

    public function totalShort(){
        $usrnm = $_SESSION['users']['username'];
        $totalScript = ShortModel::getTotalShort($usrnm);
        return $totalScript;
    }

    public function cekPasswd($passwd, $usrnm){
        $status = false;
        
        $db = DB::getInstance();
        $stmt = $db->prepare('SELECT pass FROM users WHERE username = :username');
        $stmt->execute([':username' => $usrnm]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result && password_verify($passwd, $result['pass'])) {
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

    public function updateSession(){
        $username = $_SESSION['users']['username'];
        $userdata = User::where('username', $username);
        $_SESSION['users'] = $userdata;
    }

    public function update(){
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

        $username = $_SESSION['users']['username'];
        $nama_baru = $_POST['nama_baru'];
        $tmpPass = $_POST['passBaru'];
        if($tmpPass == ""){
            $passBaru = $_SESSION['users']['pass'];
        }else{
            $passBaru = password_hash($tmpPass, PASSWORD_DEFAULT);
        }
        $roles = $_SESSION['users']['roles'];
        if($file_name == null){
            $profile_path = $_SESSION['users']['profile_path'];
        }else{
            $profile_path = '/public/img/profile/' . $file_name;
        }

        $user = new User($username, $nama_baru, $profile_path, $passBaru, $roles);
        $user->updateUser($username, $nama_baru, $profile_path, $passBaru, $roles);
        if($user){
            $_SESSION['success-edit'] = true;
            $userdata = User::where('username', $username);
            $_SESSION['users'] = $userdata;
            header('Location: /dashboard');
        }
        else{
            $_SESSION['success-edit'] = false;
            header('Location: /dashboard/edit');
        }
    }

}