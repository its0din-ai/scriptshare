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


}