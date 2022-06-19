<?php
if(isset($_POST["submit"]))
{
    $formdata = array(
        'adminID'=> $_POST["adminID"],
        'uname' => $_POST["uname"],
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'phone' => $_POST["phone"]
        
    );
    $user = array(
        $_POST["adminID"] => $formdata
    );

    $existingdata = file_get_contents('../../data/adminData.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $user;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if(file_put_contents('../../data/adminData.json', $jsondata))
    {
        echo "Informations saved successfully <br>";
    }
    else
        echo "No data saved <br>";      
}
?>