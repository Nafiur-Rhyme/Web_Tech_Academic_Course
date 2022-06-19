<?php
require('../../control/userControler.php');
$unameError = "";
$passwordError = "";
session_start();
if(isset($_POST["submit"]))
{
    if(empty($_REQUEST["uname"]))
    {
        $unameError = "This fild is required";
    }

    if(strlen($_REQUEST["password"]) <6)
    {
        $passwordError = "Password should be more than 6 characters" ."<br>";
    }
    else
    {
        $user = get_transportation_by_username($_POST["username"]);
        if($_POST['password'] == $user[$_POST['uname']]['password'])
        {
            $_SESSION["uname"] = $user[$_POST["uname"]]['uname'];
            
            header("Location: transportationProfile.php");
        }
        else
        {
            $passwordError = "username or password incorrect";
        }
    }

    
}
?>
