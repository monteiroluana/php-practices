<?php
require_once 'class/Connection.php';

class Disco
{
    // atributos
    public $id;
    public $album;
    public $artista;
    public $img;
    public $age;

    // // método construtor
    // public function __construct($album, $artista, $img){
    //     $this->nome = $album;
    //     $this->artista = $artista;
    //     $this->img = $img;
    // }

    public function selectAll()
    {
        $sql = "select id, album, artista, img, age from catalogo.disco order by artista";
        $conn = Connection::getConnection();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function insert()
    {
        $sql = "INSERT INTO catalogo.disco (album, artista, img, age) VALUES('" . $this->album . "', '" . $this->artista . "', '" . $this->img . "', '" . $this->age . "');";
        $conn = Connection::getConnection();
        $conn->exec($sql);
    }

    public function update()
    {
        $sql = "UPDATE catalogo.disco SET album = '" . $this->album . "', artista = '" . $this->artista . "', img = '" . $this->img . "', age = '" . $this->age . "' WHERE id = " . $this->id;
        $conn = Connection::getConnection();
        $conn->exec($sql);
    }

    public function getDisco()
    {
        $query = "SELECT id, album, artista, img, age FROM catalogo.disco WHERE id = " . $this->id;
        $conn = Connection::getConnection();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $disco) {
            return $disco;
        }
    }

    public function delete()
    {
        $sql = "DELETE FROM catalogo.disco WHERE id= ". $this->id;
        $conn = Connection::getConnection();
        $conn->exec($sql);
    }
}
