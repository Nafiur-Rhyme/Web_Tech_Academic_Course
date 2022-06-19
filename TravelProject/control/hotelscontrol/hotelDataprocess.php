<?php
if(isset($_POST["submit"]))
{
    $formdata = array(
        
        'hotelID' => $_POST["hotelID"],
        'uname' => $_POST["uname"],
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'rooms' => $_POST["rooms"],
    );
    $user = array(
        $_POST["uname"] => $formdata
    );

    $existingdata = file_get_contents('../../data/hotelData.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $user;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if(file_put_contents('../../data/hotelData.json', $jsondata))
    {
        echo "Informations saved successfully <br>";
    }
    else
        echo "No data saved <br>";      
}
?>