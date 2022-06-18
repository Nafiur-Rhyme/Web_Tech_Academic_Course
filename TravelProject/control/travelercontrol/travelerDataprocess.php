<?php
if(isset($_POST["submit"]))
{
    $formdata = array(
        'firstName'=> $_POST["firstName"],
        'lastName' => $_POST["lastName"],
        'uname' => $_POST["uname"],
        'age' => $_POST["age"],
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'phone' => $_POST["phone"]
    );
    $user = array(
        $_POST["uname"] => $formdata
    );

    $existingdata = file_get_contents('../../data/travelerData.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $user;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if(file_put_contents('../../data/travelerData.json', $jsondata))
    {
        echo "Informations saved successfully <br>";
    }
    else
        echo "No data saved <br>";      
}
?>