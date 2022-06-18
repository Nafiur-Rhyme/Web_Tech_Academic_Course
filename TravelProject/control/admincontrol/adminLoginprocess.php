<?php
$empIDError = "";
$passwordError = "";
if(isset($_POST["submit"]))
{

$empID = $_REQUEST["empID"];
$password = $_REQUEST["password"];

if(empty($_REQUEST["empID"]))
    {
        $userNameError = "This fild is required";
    }
    else
    {
        
    }

    if(strlen($_REQUEST["password"]) <6)
    {
        $passwordError = "Password should be more than 6 characters" ."<br>";
    }
    else
    {
        
    }
	 

}
?>

