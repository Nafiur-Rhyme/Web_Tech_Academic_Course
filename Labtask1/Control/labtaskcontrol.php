<?php
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$age = $_REQUEST["age"];
//$designation = $_POST["designation"];
//$preferredlanguage = $_POST["preferredlanguage"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

if(strlen($password) <6)
{
    echo "Password should be more than 6 characters" ."<br>";
}
else
{
    echo "Password correct" ."<br>";
}



if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    echo "Designation is " . $designation."<br>";
    
}
else
{
    echo "Must select designation" . "<br>";
}


if(isset($_REQUEST["JAVA"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"])){
    if(isset($_REQUEST["JAVA"]) && isset($_REQUEST["PHP"])){
        echo "Preferred language is " . $_REQUEST["JAVA"] . " and " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"])){
        echo "Preferred language is " . $_REQUEST["PHP"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["JAVA"]) && isset($_REQUEST["C++"])){
        echo "Preferred language is " . $_REQUEST["JAVA"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["JAVA"])){
        echo "Preferred language is " . $_REQUEST["JAVA"];
    }
    elseif(isset($_REQUEST["PHP"])){
        echo "Preferred language is " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["C++"])){
        echo "Preferred language is " . $_REQUEST["C++"];
    }

}
else
{
    echo "Must select preferred language" . "<br>";
}

if($email == "")
{
    echo "Email should not be empty";
}
else
{
    echo "Email is " . $email."<br>";
}
?>