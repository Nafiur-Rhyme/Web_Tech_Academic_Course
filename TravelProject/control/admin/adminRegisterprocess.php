<?php
if(isset($_POST["submit"]))
{

$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$empID = $_REQUEST["empID"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
if(empty($_REQUEST["firstName"]))
{
    echo "This fild is required";
}
else
{
    echo "Your first name is " . $firstName ."<br>";
}

if(empty($_REQUEST["lastName"]))
{
    echo "This fild is required";
}
else
{
    echo "Your last name is " . $lastName ."<br>";
}


if($_REQUEST["email"] == "")
{
    echo "Email should not be empty"."<br>";
}
else
{
    echo "Email is " . $email."<br>";
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