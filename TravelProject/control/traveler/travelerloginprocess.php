<?php
if(isset($_POST["submit"]))
{

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

if(empty($_REQUEST["username"]))
{
    echo "This fild is required";
}
else
{
    echo "Your username is " . $username ."<br>";
}


if(strlen($_REQUEST["password"]) <6)
{
    echo "Password should be more than 6 characters" ."<br>";
}
else
{
    echo "Password correct" ."<br>";
}
  
}
?>