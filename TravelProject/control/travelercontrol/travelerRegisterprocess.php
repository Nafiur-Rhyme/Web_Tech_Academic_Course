<?php
if(isset($_POST["submit"]))
{

$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$uname = $_REQUEST["uname"];
$age = $_REQUEST["age"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$phone = $_REQUEST["phone"];
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

if(empty($_REQUEST["uname"]))
{
    echo "This fild is required";
}
else
{
    echo "Your user name is " . $uname ."<br>";
}

if(empty($_REQUEST["age"]))
{
    echo "This fild is required";
}
else
{
    echo "Your age is " . $age ."<br>";
}

if($email == "")
{
    echo "Email should not be empty"."<br>";
}
else
{
    echo "Email is " . $email."<br>";
}

if(strlen($password) <6)
{
    echo "Password should be more than 6 characters" ."<br>";
}
else
{
    echo "Password correct" ."<br>";
}  

if(empty(phone$_REQUEST["phone"]))
{
    echo "This fild is required";
}
else
{
    echo "Your user name is " . $phone ."<br>";
}

&file = "";
if(empty($_FILES["myfile"]["name"])){
    $fileError= "No file attached";
}    
 else{
    if(move_uploaded_file($_FILES['myfile']['tmp_name'], "../upload/".$_FILES["myfile"]["name"])) 
    {  
        $file = "../Projects/".$_FILES["myfile"]["name"]; 
        } 
    else{  
        echo "Sorry, file not uploaded, please try again!" . "<br>";  
    }
 }
	 

}
?>