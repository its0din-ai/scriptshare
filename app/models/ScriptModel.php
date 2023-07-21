<?php
namespace App\Models;

use App\Func\DB;

class ScriptModel
{
    private $id;
    private $judul_script;
    private $slug_script;
    private $konten_script;
    private $visibility;
    private $tanggal;

    public function __construct($id, $judul_script, $slug_script, $konten_script, $visibility, $tanggal)
    {
        $this->id = $id;
        $this->judul_script = $judul_script;
        $this->slug_script = $slug_script;
        $this->konten_script = $konten_script;
        $this->visibility = $visibility;
        $this->tanggal = $tanggal;
    }

    public function toArray(){
        return [
            'id' => $this->id,
            'judul_script' => $this->judul_script,
            'script_slug' => $this->slug_script,
            'konten_script' => $this->konten_script,
            'visibility' => $this->visibility,
            'tanggal' => $this->tanggal
        ];
    }

    public function getid()
    {
        return $this->id;
    }

    public function getJudul()
    {
        return $this->judul_script;
    }

    public function getSlug()
    {
        return $this->slug_script;
    }

    public function getKonten(){
        return $this->konten_script;
    }

    public static function getTotalPost($usrnm){
        $db = DB::getInstance();
        $query = "SELECT COUNT(*) FROM script_db WHERE uploader = '$usrnm'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result[0];
    }

}