<?php
    require_once "../../model/model.php";
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if (userLogin($username, $password)){
            header("Location: ../../index.php");
        }else{
            header("location: ../login.php");
        };

    require "login-process";
?>