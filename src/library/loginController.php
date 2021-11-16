<?php
    require_once("./loginManager.php");

    if(isset($_GET["logout"])){
        logOut();
    } 
    else if(isset($_POST["adminEmail"]) && isset($_POST["adminPass"])){
            $email = $_POST["adminEmail"];
            $pass = $_POST["adminPass"];
            authUser($email,$pass);
        }
        
        
        