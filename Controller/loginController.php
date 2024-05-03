<?php
session_start();
include_once __DIR__ . "/../Models/steam.php";

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $currentUser = array_filter($users, fn($user) => $user["name"] == $username && $user["password"] == $password);
    if($currentUser) {
        $userLogged = array_shift($currentUser);
        $_SESSION["userLogged"] = $userLogged;
        header("location: ./index.php");

    }
}