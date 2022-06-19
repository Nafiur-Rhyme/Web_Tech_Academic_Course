<?php
$unameError = "";
$passwordError = "";
session_start();
if(isset($_POST["submit"]))
{

    $usersData = array();
    $jsonData= file_get_contents("../../data/transportationData.json");
    $phpData = (array)json_decode($jsonData);
    
    $usersData = json_decode(json_encode($phpData), true);
    print_r($usersData);

    if(empty($_REQUEST["uname"]))
    {
        $unameError = "This fild is required";
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
    $id = array_search($_POST["uname"],array_column($usersData,'uname'));
    $user = $usersData[$id];
    if($_POST['password'] == $user[$_POST['uname']]['password'])
    {
        $_SESSION["uname"] = $user[$_POST["uname"]]['uname'];
        $_SESSION["companyName"] = $user[$_POST["uname"]]['companyName'];
        $_SESSION["email"] = $user[$_POST["uname"]]['email'];
        $_SESSION["phone"] = $user[$_POST["uname"]]['phone'];
        header("Location: profile.php");
    }
    else
    {
        $passwordError = "username or password incorrect";
    }
}
?>
