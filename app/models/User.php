<?php
namespace App\Models;

require './app/func/DB.php';
use App\Func\DB;

class User
{
    private $username;
    private $nama_pengguna;
    private $profile;
    private $password;
    private $roles;

    public function __construct($username, $nama_pengguna, $profile, $password, $roles)
    {
        $this->username = $username;
        $this->nama_pengguna = $nama_pengguna;
        $this->profile = $profile;
        $this->password = $password;
        $this->roles = $roles;
    }

    // create return of array from the models
    public function toArray()
    {
        return [
            'username' => $this->username,
            'nama_pengguna' => $this->nama_pengguna,
            'profile_path' => $this->profile,
            'pass' => $this->password,
            'roles' => $this->roles
        ];
    }

    public function insertUser($username, $nama_pengguna, $profile_path, $password, $roles){
        $db = DB::getInstance();
        $stmt = $db->prepare('INSERT INTO users (username, nama_pengguna, profile_path, pass, roles) VALUES (:username, :nama_pengguna, :profile_path, :pass, :roles)');
        $stmt->execute([':username' => $username, ':nama_pengguna' => $nama_pengguna, ':profile_path' => $profile_path, ':pass' => password_hash($password, PASSWORD_DEFAULT), ':roles' => $roles]);
    }

    public function cekUsername($data){
        $db = DB::getInstance();
        $query = "SELECT * FROM users WHERE username = '$data'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public static function allUser(){
        $db = DB::getInstance();
        $query = "SELECT * FROM users";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public static function where($param, $username){
        $db = DB::getInstance();
        $query = "SELECT * FROM users WHERE $param = '$username'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function updateUser($username, $namaBaru, $profile_path, $password, $roles){
        $db = DB::getInstance();
        $stmt = $db->prepare('UPDATE users SET nama_pengguna = :namaBaru, profile_path = :profile_path, pass = :pass, roles = :roles WHERE username = :username');
        $stmt->execute([':username' => $username, ':namaBaru' => $namaBaru, ':profile_path' => $profile_path, ':pass' => $password, ':roles' => $roles]);
        $err = $stmt->errorInfo();
        if ($err[0] != '00000') {
            echo $err[2];
        }else{
            return true;
        }
    }
}