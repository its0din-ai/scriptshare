<?php
namespace App\Func;

use PDO;
use PDOException;

require './app/func/envget.php';

class DB
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        
        $host = envget('DB_HOST');
        $port = envget('DB_PORT');
        $dbname = envget('DB_DATABASE');
        $username = envget('DB_USERNAME');
        $password = envget('DB_PASSWORD');

        try {
            $this->connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Koneksi database gagal: ' . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance->connection;
    }
}
