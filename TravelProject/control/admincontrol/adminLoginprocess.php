<?php
$unameError = "";
$passwordError = "";
session_start();
if(isset($_POST["submit"]))
{

    $usersData = array();
    $jsonData= file_get_contents("../../data/adminData.json");
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
        $_SESSION["adminID"] = $user[$_POST["adminID"]]['uname'];
        header("Location: profile.php");
    }
    else
    {
        $passwordError = "username or password incorrect";
    }
}
?>
