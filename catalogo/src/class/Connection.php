<?php
require_once 'config.php';

class Connection{
    public static function getConnection(){
        $conn = new PDO(DB_DRIVE .':host='.DB_HOSTNAME.';port=5432;dbname='.DB_DATABASE.';user='.DB_USERNAME.';password=' .DB_PASSWORD);
        return $conn;
    }
}
?>