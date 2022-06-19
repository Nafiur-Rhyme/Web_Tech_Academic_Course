<?php
session_start();

if(isset($_SESSION["uname"]))
{
    echo "Hi ". $_SESSION["uname"]. "<br>";
} 
else
{
    header('Location: transportationLogin.php');
}

?>