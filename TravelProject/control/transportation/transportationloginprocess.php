<?php
if(isset($_POST["submit"]))
{

$empID = $_REQUEST["empID"];
$password = $_REQUEST["password"];

if(empty($_REQUEST["empID"]))
{
    echo "This fild is required";
}
else
{
    echo "Your ID is " . $empID ."<br>";
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