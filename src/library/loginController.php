<?php
    require_once("./loginManager.php");


    if(isset($_POST["email"]) && isset($_POST["pass"])){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        authUser($email,$pass);
    }
    


    

    