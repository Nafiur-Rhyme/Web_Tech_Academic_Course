<?php
$userNameError = "";
$passwordError = "";
session_start();
if(isset($_POST["submit"]))
{

 
    
    //print_r($usersData);
    if(empty($_REQUEST["username"]))
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
    $usersData = array();
    $jsonData= file_get_contents("../../data/travelerData.json");
    $phpData = (array)json_decode($jsonData);
    //print_r($phpData);
    //echo "<br>";
    $usersData = json_decode(json_encode($phpData), true);
    $id = array_search($_POST["username"],array_column($usersData,'uname'));
    $user = $usersData[$id];
    if($_POST['password'] == $user[$_POST['username']]['password'])
    {
        $_SESSION["username"] = $user[$_POST["username"]]['uname'];
        header("Location: startTrip.php");
    }
    else
    {
        $passwordError = "username or password incorrect";
    }
}
?>
