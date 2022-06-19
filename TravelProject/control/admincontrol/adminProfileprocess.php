<?php
session_start();

if(isset($_SESSION["adminID"]))
{
    echo "Hi ". $_SESSION["adminID"]. "<br>";
    $adminID = $_SESSION["adminID"] . "<br>";
    $uname = $_SESSION["uname"]. "<br>";
    $email = $_SESSION["email"]. "<br>";
}
else
{
    header('Location: adminLogin.php');
}

?>