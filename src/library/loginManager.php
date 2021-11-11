<?php
    function authUser($email, $pass){
        $userJson = file_get_contents("../../resources/users.json");
        $userData = json_decode($userJson, true);

        if($email == $userData["users"][0]["email"] && password_verify($pass, $userData["users"][0]["password"])){
            header("Location:../dashboard.php");
        }
    }