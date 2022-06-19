<?php


    $hotelIDError = "";
    $unameError = "";
    $emailError = "";
    $passwordError = "";

    if(isset($_POST["submit"]))
    {
        
        $hotelID = $_REQUEST["hotelID"];
        $uname = $_REQUEST["uname"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        


        

        if(empty($_REQUEST["hotelID"]))
        {
            $hotelIDError = "This fild is required"."<br>";
        }
        else
        {
            $hotelIDError = "Your hotel ID is " . $hotelID ."<br>";
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