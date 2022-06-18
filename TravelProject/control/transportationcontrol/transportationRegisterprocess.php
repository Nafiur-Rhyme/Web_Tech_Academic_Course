<?php

    
    $companyNameError = "";
    $unameError = "";
    $emailError = "";
    $passwordError = "";
    $phoneError = "";

    if(isset($_POST["submit"]))
    {
        $companyName = $_REQUEST["companyName"];
        $uname = $_REQUEST["uname"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $phone = $_REQUEST["phone"];

<<<<<<< HEAD
if(empty($uname))
{
    echo "This fild is required";
}
else
{
    echo "Your user name is " . $uname ."<br>";
}
=======
>>>>>>> 71c5894148534991f19aaf780824b062bf70c4f2

        if(empty($_REQUEST["companyName"]))
        {
            $CompanyNameError = "This fild is required";
        }
        else
        {
            $CompanyNameError = "Your company name is " . $companyName ."<br>";
        }

    

        if(empty($_REQUEST["uname"]))
        {
            $unameError = "This fild is required"."<br>";
        }
        else
        {
            $unameError = "Your user name is " . $uname ."<br>";
        }

        if(empty($_REQUEST["email"]))
        {
            $emailError = "Email should not be empty"."<br>";
        }
        else
        {
            $emailError = "Email is " . $email."<br>";
        }

        if(strlen($_REQUEST["password"]) <6)
        {
            $passwordError = "Password should be more than 6 characters" ."<br>";
        }
        else
        {
            $passwordError = "Password Saved" ."<br>";
        }  

        if(empty($_REQUEST["phone"]))
        {
            $phoneError = "This fild is required";
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
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], "../upload/".$_FILES["myfile"]["name"])) 
            {  
                $file = "../Projects/".$_FILES["myfile"]["name"]; 
            } 
            else
            {  
                echo "Sorry, file not uploaded, please try again!" . "<br>";  
            }
        }
        
    }
?>