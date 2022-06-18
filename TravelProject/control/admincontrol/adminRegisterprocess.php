<?php
$firstNameError = "";
$lastNameError = "";
$empIDError = "";
$emailError = "";
$passwordError = "";
$phoneError = "";
if(isset($_POST["submit"]))
{

if(empty($_REQUEST["firstName"]))
{
    $firstNameError = "This fild is required";
}
else
{
    $firstNameError = "Your first name is " . $_REQUEST["firstName"] ."<br>";
}

if(empty($_REQUEST["lastName"]))
{
    $lastNameError = "This fild is required";
}
else
{
    $lastNameError = "Your last name is " . $_REQUEST["lastName"] ."<br>";
}


if(empty($_REQUEST["email"]))
{
    $emailError = "Email should not be empty"."<br>";
}
else
{
    $emailError = "Email is " . $_REQUEST["email"]."<br>";
}

if(strlen($_REQUEST["password"]) <6)
{
    $passwordError = "Password should be more than 6 characters" ."<br>";
}
else
{
    $passwordError = "Password correct" ."<br>";
}

}
?>