<?php 
    session_start();

    require "./functions.php";

    if(!isset($_SESSION["login"])) {
        header("Location: ./public/login.php");
        exit;
    }
    
    $id = $_GET["id_note"];

    if(!deleteNote($id)) {
        header("Location: ../src/notes.php");
    }
?>