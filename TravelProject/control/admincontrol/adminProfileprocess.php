<?php
session_start();

if(isset($_SESSION["adminID"]))
{
    echo "Hi ". $_SESSION["adminID"]. "<br>";
} 
else
{
    header('Location: adminLogin.php');
}

?>