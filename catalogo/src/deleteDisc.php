<?php

require_once 'class/Disco.php';

$disco = new Disco();

if (!empty($_GET["id"])) {
    $disco->id = $_GET["id"];
    $disco->delete();
    header('Location:index.php');
}

?>