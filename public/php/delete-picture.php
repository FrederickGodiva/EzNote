<?php 
    session_start();

    require "../php/functions.php";

    if(!isset($_SESSION["login"])) {
        header("Location: ./login.php");
        exit;
    }

    $id_picture = $_GET["id_picture"];

    if(deleteImage($id_picture)) {
        header("Location: ../src/pictures.php");
    }
?>