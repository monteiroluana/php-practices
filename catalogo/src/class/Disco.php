<?php
require_once 'class/Connection.php';

class Disco
{
    // atributos
    public $id;
    public $album;
    public $artista;
    public $img;

    // // método construtor
    // public function __construct($album, $artista, $img){
    //     $this->nome = $album;
    //     $this->artista = $artista;
    //     $this->img = $img;
    // }

    public function listar(){
        $sql = "select id, album, artista, img from catalogo.disco";
        $conn = Connection::getConnection();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir(){
        $sql = "INSERT INTO catalogo.disco (album, artista, img) VALUES('" . $this->album . "', '".$this->artista."', '".$this->img."');";
        $conn = Connection::getConnection();
        $conn->exec($sql);
    }
}


?>