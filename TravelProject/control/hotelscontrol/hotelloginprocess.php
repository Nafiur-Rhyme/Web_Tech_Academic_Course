<?php
$unameError = "";
$passwordError = "";
session_start();
if(isset($_POST["submit"]))
{

 
    $usersData = array();
    $jsonData= file_get_contents("../../data/hotelData.json");
    $phpData = (array)json_decode($jsonData);
    //print_r($phpData);
    //echo "<br>";
    $usersData = json_decode(json_encode($phpData), true);
    print_r($usersData);
    if(empty($_REQUEST["uname"]))
    {
        $hotelIDError = "This fild is required";
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
    $id = array_search($_POST["hotelID"],array_column($usersData,'hotelID'));
    $user = $usersData[$id];
    if($_POST['password'] == $user[$_POST['uname']]['password'])
    {
        $_SESSION["hotelID"] = $user[$_POST["hotelID"]]['hotelID'];
        $_SESSION["uname"] = $user[$_POST["hotelID"]]['uname'];
        $_SESSION["email"] = $user[$_POST["hotelID"]]['email'];
        $_SESSION["rooms"] = $user[$_POST["hotelID"]]['rooms'];
        header("Location: profile.php");
    }
    else
    {
        $passwordError = "ID or password incorrect";
    }
}
?>
