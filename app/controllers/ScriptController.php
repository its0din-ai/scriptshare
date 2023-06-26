<?php
use App\Models\Script;
use App\Models\ScriptModel;
use App\Func\DB;

class ScriptController
{
    public function upload($data){
        
        $slug_script = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

        $db = DB::getInstance();
        $validasi = "SELECT slug_script FROM scriptdb WHERE slug_script = :slug_script";
        $stmt = $db->prepare($validasi);
        $stmt->execute([':slug_script' => $slug_script]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            $slug_script = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        }else{
            $query = "INSERT INTO scriptdb (uploader, judul_script, slug_script, konten_script, visibility) VALUES (:uploader, :judul_script, :slug_script, :konten_script, :visibility)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':uploader', $data['id_user']);
            $stmt->bindParam(':judul_script', $data['judul_script']);
            $stmt->bindParam(':slug_script', $slug_script);
            $stmt->bindParam(':konten_script', $data['konten_script']);
            $stmt->bindParam(':visibility', $data['visibility']);
            $stmt->execute();

            header('Location: /dashboard/script');
        }
    }

    public function getPost(){
        $db = DB::getInstance();
        $query = "SELECT id, uploader, judul_script, slug_script, SUBSTRING(konten_script, 1, 250) AS konten_script, tanggal FROM scriptdb WHERE visibility = 'Public' ORDER BY tanggal DESC";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getPrivatePost(){
        $db = DB::getInstance();
        $query = "SELECT id, uploader, judul_script, slug_script, SUBSTRING(konten_script, 1, 250) AS konten_script, tanggal FROM scriptdb WHERE visibility = 'Private' AND uploader = :username ORDER BY tanggal DESC";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $_SESSION['users']['username']);
        $stmt->execute();
        $prv = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $prv;
    }

}