<?php
session_start();

$username = "admin";
$password = "1234";

if($_POST["username"] == $username && $_POST["password"] == $password) {

    $_SESSION["loggedin"] = true;
    $_SESSION["user"] = $username;

    echo "Login successful";
} else {
    echo "Invalid credentials";
}
?>