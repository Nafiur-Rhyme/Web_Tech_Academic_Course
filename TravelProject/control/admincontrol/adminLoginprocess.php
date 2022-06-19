<?php
require('../../control/userControler.php');
$adminIDError = "";
$passwordError = "";
session_start();
if(isset($_POST["submit"]))
{

    if(empty($_REQUEST["adminID"]))
    {
        $adminIDError = "This fild is required";
    }
    else
    {

    }
    if(strlen($_REQUEST["password"]) <6)
    {
        $passwordError = "Password should be more than 6 characters" ."<br>";
    }
    else
    {
        $user = get_admin_by_ID($_REQUEST["adminID"]);
        //print_r($user);
        //echo $user['101']['email'];
        if($_POST['password'] == $user[$_REQUEST["adminID"]]['password'])
        {
            $_SESSION["adminID"] = $user[$_REQUEST["adminID"]]['adminID'];
            header("Location: adminProfile.php");
        }
        else
        {
            $passwordError = "username or password incorrect";
        }
    }
    
}
?>
