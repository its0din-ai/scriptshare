<?php

use App\Models\User;
use App\Func\DB;
use App\Models\ScriptModel;
use App\Models\ShortModel;

class ShortController
{

    public function getAllShort(){
        $userModel = ShortModel::getAllShort();
        return $userModel;
    }

    public function getAllShortBy($username){
        $userModel = ShortModel::getAllShortBy($username);
        return $userModel;
    }

    
    public function shortPersonal(){
        if(isset($_SESSION['users'])){
            if($_SESSION['users']['roles'] == 'admin'){
                $content = dirname(__FILE__) . '/../views/dashboard/short/manage-short.php';
                $judul = $_SESSION['users']['username'] . ' Shortlinks';
                $data = $this->getAllShort();
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
            else if($_SESSION['users']['roles'] == 'users'){
                $content = dirname(__FILE__) . '/../views/dashboard/short/manage-short.php';
                $judul = $_SESSION['users']['username'] . ' Shortlinks';
                $data = $this->getAllShortBy($_SESSION['users']['username']);
                include dirname(__FILE__) . '/../views/layout/app.php';
            }
        }else{
            header('Location: /login');
        }
    }

    public function upload($username){
        $tujuan = $_POST['tujuan'];
        $short_slug = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

        $db = DB::getInstance();
        $validasi = "SELECT short_slug FROM short_db WHERE short_slug = :short_slug";
        $stmt = $db->prepare($validasi);
        $stmt->execute([':short_slug' => $short_slug]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            $short_slug = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        }else{
            $query = "INSERT INTO short_db (owner, short_slug, tujuan) VALUES (:owner, :short_slug, :tujuan)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':owner', $username);
            $stmt->bindParam(':short_slug', $short_slug);
            $stmt->bindParam(':tujuan', $tujuan);
            $stmt->execute();
            $sukses = array(
                'short_slug' => $short_slug,
                'tujuan' => $tujuan
            );

            $_SESSION['success-short'] = $sukses;
            header('Location: /manage/short');
        }
    }

    public function redirect($slug){
        $tujuan = ShortModel::getTujuan($slug);
        if($tujuan){
            header('Location: ' . $tujuan);
        }else{
            header('Location: /');
        }
        // edit / ke page shortlink invalid / dihapus
    }

    public function debug($err) {
        var_dump($err);
    }
}