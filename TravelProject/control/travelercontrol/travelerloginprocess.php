<?php
session_start();
require('../../control/userControler.php');

$userNameError = "";
$passwordError = "";

if(isset($_POST["submit"]))
{
    if(empty($_REQUEST["username"]))
    {
        $userNameError = "This fild is required";
    }

    if(strlen($_REQUEST["password"]) <6)
    {
        $passwordError = "Password should be more than 6 characters" ."<br>";
    }
    else
    {
        $user = get_traveler_by_username($_POST["username"]);
        //print_r($user);
        //echo $user['rhyme']['uname'];
        if($_POST['password'] == $user[$_POST["username"]]['password'])
        {
            $_SESSION["username"] = $user[$_POST["username"]]['uname'];
            
            header("Location: startTrip.php");
        }
        else
        {
            $passwordError = "username or password incorrect";
        }
    }
}
?>
