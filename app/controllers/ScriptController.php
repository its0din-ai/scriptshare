<?php
use App\Models\Script;
use App\Models\ScriptModel;
use App\Func\DB;

class ScriptController
{
    public function upload($data){
        
        $script_slug = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

        $db = DB::getInstance();
        $validasi = "SELECT script_slug FROM script_db WHERE script_slug = :script_slug";
        $stmt = $db->prepare($validasi);
        $stmt->execute([':script_slug' => $script_slug]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
            $script_slug = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        }else{
            $query = "INSERT INTO script_db (uploader, judul_script, script_slug, konten_script, visibility) VALUES (:uploader, :judul_script, :script_slug, :konten_script, :visibility)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':uploader', $data['id_user']);
            $stmt->bindParam(':judul_script', $data['judul_script']);
            $stmt->bindParam(':script_slug', $script_slug);
            $stmt->bindParam(':konten_script', $data['konten_script']);
            $stmt->bindParam(':visibility', $data['visibility']);
            $stmt->execute();

            header('Location: /dashboard/script');
        }
    }

    public function getPost(){
        $db = DB::getInstance();
        $query = "SELECT id, uploader, judul_script, script_slug, SUBSTRING(konten_script, 1, 250) AS konten_script, tanggal, visibility, nama_pengguna, profile_path FROM script_db, users WHERE username = uploader ORDER BY tanggal DESC;";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getPrivatePost(){
        $db = DB::getInstance();
        $query = "SELECT id, uploader, judul_script, script_slug, SUBSTRING(konten_script, 1, 250) AS konten_script, tanggal, visibility, nama_pengguna, profile_path FROM script_db, users WHERE uploader = :username AND username = :username ORDER BY visibility = 'Public' DESC, tanggal DESC;";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $_SESSION['users']['username']);
        $stmt->execute();
        $prv = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $prv;
    }

    public function script($slug){
        $db = DB::getInstance();
        $query = "SELECT id, uploader, judul_script, script_slug, konten_script, tanggal, visibility, nama_pengguna, profile_path FROM script_db, users WHERE script_slug = :slug AND username = uploader";
        $stmt = $db->prepare($query);
        $stmt->execute([':slug' => $slug]);
        $detail = $stmt->fetch(PDO::FETCH_ASSOC);

        $content = dirname(__FILE__) . '/../views/dashboard/script/detail.php';
        $judul = $detail['judul_script'];
        include dirname(__FILE__) . '/../views/layout/app.php';

        return $detail;
        // header('Location: /dashboard/script');
    }

    public function edit_script($slug){
        $db = DB::getInstance();
        $query = "SELECT id, uploader, judul_script, script_slug, konten_script, tanggal, visibility, nama_pengguna, profile_path FROM script_db, users WHERE script_slug = :slug AND username = uploader";
        $stmt = $db->prepare($query);
        $stmt->execute([':slug' => $slug]);
        $detail = $stmt->fetch(PDO::FETCH_ASSOC);

        $content = dirname(__FILE__) . '/../views/dashboard/script/edit.php';
        $judul = "EDIT " . $detail['judul_script'];
        include dirname(__FILE__) . '/../views/layout/app.php';

        return $detail;
        // header('Location: /dashboard/script');
    
    }

    public function update(){
        $db = DB::getInstance();
        $query = "UPDATE script_db SET judul_script = :judul_script, konten_script = :konten_script, visibility = :visibility WHERE script_slug = :slug";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':judul_script', $_POST['judul']);
        $stmt->bindParam(':konten_script', $_POST['konten']);
        $stmt->bindParam(':visibility', $_POST['visibility']);
        $stmt->bindParam(':slug', $_POST['slug']);
        $stmt->execute();

        header('Location: /script/' . $_POST['slug']);
    }
    
    public function hapus_script($slug){
        $db = DB::getInstance();
        $query = "DELETE FROM script_db WHERE script_slug = :slug";
        $stmt = $db->prepare($query);
        $stmt->execute([':slug' => $slug]);

        header('Location: /dashboard/script/personal');
    }

}