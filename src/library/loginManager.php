<?php
    function authUser($email, $pass){
        
        $userJson = file_get_contents("../../resources/users.json");
        $userData = json_decode($userJson, true);

        if($email == $userData["users"][0]["email"] && password_verify($pass, $userData["users"][0]["password"])){
            
            session_start();

            $_SESSION["email"] = $email;
            $_SESSION["name"] = $userData["users"][0]["name"];
            
            header("Location:../dashboard.php");
        }
        else{
            $_SESSION["wrongLogin"] = "Wrong email or password!";
            header("Location:../../index.php");
        }
    }