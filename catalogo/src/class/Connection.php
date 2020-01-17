<?php
class Connection{
    public static function getConnection(){
        $conn = new PDO('pgsql:host=localhost;port=5432;dbname=persiann;user=persiann;password=persiann');
        return $conn;
    }
}
?>