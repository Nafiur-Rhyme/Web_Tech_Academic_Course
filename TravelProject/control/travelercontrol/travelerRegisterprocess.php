<?php

    
    $firstNameError = "";
    $lastNameError = "";
    $unameError = "";
    $ageError = "";
    $emailError = "";
    $passwordError = "";
    $phoneError = "";
    $fileError = "";
    $valid = true;
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
            $firstNameError = "This fild is required";
            $valid = false;
        }
        else
        {
            $firstNameError = "Your first name is " . $firstName ."<br>";
        }

        if(empty($_REQUEST["lastName"]))
        {
            $lastNameError = "This fild is required"."<br>";
            $valid = false;
        }
        else
        {
            $lastNameError = "Your last name is " . $lastName ."<br>";
        }

        if(empty($_REQUEST["uname"]))
        {
            $unameError = "This fild is required"."<br>";
            $valid = false;
        }
        else
        {
            $unameError = "Your user name is " . $uname ."<br>";
        }

        if(empty($_REQUEST["age"]))
        {
            $ageError = "This fild is required";
            $valid = false;
        }
        else
        {
            $ageError = "Your age is " . $age ."<br>";
        }

        if(empty($_REQUEST["email"]))
        {
            $emailError = "Email should not be empty"."<br>";
            $valid = false;
        }
        else
        {
            $emailError = "Email is " . $email."<br>";
        }

        if(strlen($_REQUEST["password"]) <6)
        {
            $passwordError = "Password should be more than 6 characters" ."<br>";
            $valid = false;
        }
        else
        {
            $passwordError = "Password Saved" ."<br>";
        }  

        if(empty($_REQUEST["phone"]))
        {
            $phoneError = "This fild is required";
            $valid = false;
        }
        else
        {
            $phoneError = "Your phone number is " . $phone ."<br>";
        }

        $file = "";
        if(empty($_FILES["myfile"]["name"]))
        {
            $fileError= "No file attached";
        }    
        else
        {
            $file = "../../files/".$_FILES["myfile"]["name"]; 
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], "../../files".$_FILES["myfile"]["name"])) 
            {  
                $fileError = "Uploaded ".$_FILES["myfile"]["type"]; 
            } 
            else
            {  
                $fileError =  "Sorry, file not uploaded, please try again!" . "<br>";  
            }
        }
        
    }
?>