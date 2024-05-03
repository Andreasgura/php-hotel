<?php
session_start();
include_once __DIR__ . "/../Models/steam.php";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    var_dump($username, $password);
    $currentUser = array_filter($users, fn($user) => $user["email"] == $email && $user["password"] == $password);
    if($currentUser) {
        var_dump($currentUser);
        $userLogged = array_shift($currentUser);
        $_SESSION["userLogged"] = $userLogged;
        header("location: ../index.php");

    }
} else {
    var_dump("non sono stati inviati i dati");
}