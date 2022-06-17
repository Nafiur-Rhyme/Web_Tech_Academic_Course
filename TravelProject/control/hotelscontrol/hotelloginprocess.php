<?php
if(isset($_POST["submit"]))
{

$hotelID = $_REQUEST["hotelID"];
$password = $_REQUEST["password"];

if(empty($_REQUEST["hotelID"]))
{
    echo "This fild is required";
}
else
{
    echo "Your Hotel ID is " . $hotelID ."<br>";
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