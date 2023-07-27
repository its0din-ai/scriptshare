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
        // check if result is empty
        if($result){
            return $result[0];
        }else{
            return false;
        }
    }

    public static function delete($id){
        $db = DB::getInstance();
        $query = "DELETE FROM short_db WHERE id = '$id'";
        $stmt = $db->prepare($query);
        $stmt->execute();
    }

    public static function edit($id, $slug, $tujuan){
        $db = DB::getInstance();
        $query = "UPDATE short_db SET tujuan = :tujuan, short_slug = :short_slug WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':tujuan', $tujuan);
        $stmt->bindParam(':short_slug', $slug);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

}