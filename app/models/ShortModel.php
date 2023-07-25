<?php
namespace App\Models;

use App\Func\DB;

Class ShortModel{

    private $id;
    private $owner;
    private $short_slug;
    private $tujuan;
    private $tanggal;

    public function __construct($id, $owner, $short_slug, $tujuan, $tanggal)
    {
        $this->id = $id;
        $this->owner = $owner;
        $this->short_slug = $short_slug;
        $this->tujuan = $tujuan;
        $this->tanggal = $tanggal;
    }

    public static function getTotalShort($usrnm){
        $db = DB::getInstance();
        $query = "SELECT COUNT(*) FROM short_db WHERE owner = '$usrnm'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result[0];
    }

    public static function getAllShort(){
        $db = DB::getInstance();
        $query = "SELECT * FROM short_db";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public static function getAllShortBy($username){
        $db = DB::getInstance();
        $query = "SELECT * FROM short_db WHERE owner = '$username'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public static function getTujuan($slug){
        $db = DB::getInstance();
        $query = "SELECT tujuan FROM short_db WHERE short_slug = '$slug'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result[0];
    }

}