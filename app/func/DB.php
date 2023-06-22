<?php
namespace App\Func;

use PDO;
use PDOException;

class DB
{
    private static $instance;
    private $connection;

    private function __construct()
    {
        
        // $host = getenv('DB_HOST');
        // $port = getenv('DB_PORT');
        // $dbname = getenv('DB_NAME');
        // $username = getenv('DB_USERNAME');
        // $password = getenv('DB_PASSWORD');

        $host = '127.0.0.1';
        $port = 3306;
        $dbname = 'webtesting';
        $username = 'root';
        $password = '';

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
