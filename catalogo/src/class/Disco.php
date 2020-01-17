<?php
class Disco
{
    public function listar(){
        $sql = "select id, album, artista, img from catalogo.disco";
        $conn = new PDO('pgsql:host=localhost;port=5432;dbname=persiann;user=persiann;password=persiann');
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }
}


?>