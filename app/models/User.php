<?php
namespace App\Models;

require './app/func/DB.php';
use App\Func\DB;

class User
{
    private $username;
    private $nama_pengguna;
    private $password;
    private $roles;

    public function __construct($username, $nama_pengguna, $password, $roles)
    {
        $this->username = $username;
        $this->nama_pengguna = $nama_pengguna;
        $this->password = $password;
        $this->roles = $roles;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPasswordDB()
    {
        return $this->password;
    }

    public function getRoles(){
        return $this->roles;
    }

}