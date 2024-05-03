<?php
session_start();
include_once __DIR__ . "/../Models/steam.php";
$errorMessage = "";
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $currentUser = array_filter($users, fn($user) => $user["email"] == $email && $user["password"] == $password);
    if ($currentUser) {
        var_dump($currentUser);
        $userLogged = array_shift($currentUser);
        $_SESSION["userLogged"] = $userLogged;
        $_SESSION["userId"] = $userLogged["id"];
        var_dump($_SESSION["userId"]);
        header("location: ../index.php");

    } else {
        $errorMessage = "Inserisci email e password correttamente";
    }
}