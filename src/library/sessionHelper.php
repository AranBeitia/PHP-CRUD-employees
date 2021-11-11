<?php  
    function checkSession(){
        session_start();

        if(isset($_SESSION["email"])){
            session_start();
            header("Location:./src/dashboard.php");
        }
        else if (isset($_SESSION["wrongLogin"])){
            $errorMsg =  $_SESSION["wrongLogin"];
            unset($_SESSION["wrongLogin"]);
            return ["type" => "danger", "text" => $errorMsg] ;
        }
    }