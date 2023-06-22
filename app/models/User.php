<?php
namespace App\Models;

require './app/func/DB.php';

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
            'profile' => $this->profile,
            'password' => $this->password,
            'roles' => $this->roles
        ];
    }

}