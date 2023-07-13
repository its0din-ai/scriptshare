<?php

use app\models\User;
require './app/models/User.php';

use App\Func\DB;

class HomeController
{
    public function index()
    {
        $content = dirname(__FILE__) . '/../views/index.php';
        $judul = 'Home';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function notFound()
    {
        $content = dirname(__FILE__) . '/../views/404.php';
        $judul = '404';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function regist(){
        $content = dirname(__FILE__) . '/../views/auth/regist.php';
        $judul = 'Daftar Akun';
        include dirname(__FILE__) . '/../views/layout/app.php';
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

    protected function crop(){
        // $image = imagecreatefromjpeg($_FILES['foto']['tmp_name']);
        // $filename = $_FILES['foto']['name'];
        // $width = imagesx($image);
        // $height = imagesy($image);
        // $min = min($width, $height);
        // $x = ($width - $min) / 2;
        // $y = ($height - $min) / 2;
        // $image_cropped = imagecrop($image, ['x' => $x, 'y' => $y, 'width' => $min, 'height' => $min]);
        // imagejpeg($image_cropped, $filename, 100);
        // return $filename;
        $uploadedImagePath = 'path/to/uploaded/image.jpg';

        // Load the uploaded image
        $sourceImage = imagecreatefromjpeg($uploadedImagePath);

        // Get the dimensions of the source image
        $sourceWidth = imagesx($sourceImage);
        $sourceHeight = imagesy($sourceImage);

        // Determine the size of the square crop
        $size = min($sourceWidth, $sourceHeight);

        // Create a new square image canvas
        $croppedImage = imagecreatetruecolor($size, $size);

        // Calculate the offset to crop from the top
        $offsetX = 0;
        $offsetY = 0;

        // Crop the image from the top
        imagecopy($croppedImage, $sourceImage, 0, 0, $offsetX, $offsetY, $size, $size);

        // Output the cropped image to a file or display it directly
        $croppedImagePath = 'path/to/save/cropped/image.jpg';
        imagejpeg($croppedImage, $croppedImagePath);

        // Free up memory by destroying the images
        imagedestroy($sourceImage);
        imagedestroy($croppedImage);
    }

    public function daftar()
    {
        if(isset($_FILES['foto'])){
            if($_FILES['foto']['name'] != ""){
                $errors= array();
                $file_name = $_FILES['foto']['name'];
                $file_size =$_FILES['foto']['size'];
                $file_tmp =$_FILES['foto']['tmp_name'];
                $file_type=$_FILES['foto']['type'];
                
                $extensions= array("image/jpeg","image/jpg","image/png", "");
                if(in_array($file_type,$extensions)=== false){
                    $errors[]="Maaf, hanya file JPEG, JPG, dan PNG saja";
                }
                
                if($file_size > 2097152){
                    $errors[]='File size must be excately 2 MB';
                }
                
                if(empty($errors) == true){
                    $file_name = md5_file($file_tmp) . '.' . pathinfo($file_name, PATHINFO_EXTENSION);
                    move_uploaded_file($file_tmp,"./public/img/profile/".$file_name);
                }else{
                    print_r($errors);
                }
            } else{
                $file_name = null;
            }

        }

        $username = $_POST['username'];
        $nama_pengguna = $_POST['nama_pengguna'];
        $password = $_POST['password'];
        $roles = 'users';
        if($file_name == null){
            $profile_path = '/public/img/profile/nopp.png';
        }else{
            $profile_path = '/public/img/profile/' . $file_name;
        }

        $user = new User($username, $nama_pengguna, $profile_path, $password, $roles);
        $user->insertUser($username, $nama_pengguna, $profile_path, $password, $roles);
        $_SESSION['success'] = true;
        header('Location: /login');
    }

    public function login()
    {
        $content = dirname(__FILE__) . '/../views/auth/login.php';
        $judul = 'Login';
        include dirname(__FILE__) . '/../views/layout/app.php';
    }

    public function loginCeker()
    {
        $status = false;
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db = DB::getInstance();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute([':username' => $username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result && password_verify($password, $result['pass'])) {
            $user = new User($result['username'], $result['nama_pengguna'], $result['profile_path'], $result['pass'], $result['roles']);
            $status = true;
            $_SESSION['users'] = $user->toArray();
            header('Location: /dashboard');
        } else {
            $status = false;
        }

        return $status;
    }



}