<?php
namespace App\Models;

require './app/func/DB.php';

class User
{
    private $id;
    private $judul_script;
    private $slug_script;
    private $konten_script;

    public function __construct($id, $judul_script, $slug_script, $konten_script)
    {
        $this->id = $id;
        $this->judul_script = $judul_script;
        $this->slug_script = $slug_script;
        $this->konten_script = $konten_script;
    }

    public function getid()
    {
        return $this->id;
    }

    public function getSlug()
    {
        return $this->slug_script;
    }

    public function getKonten(){
        return $this->konten_script;
    }

}