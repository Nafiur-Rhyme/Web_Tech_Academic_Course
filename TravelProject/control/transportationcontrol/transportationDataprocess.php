<?php
if(isset($_POST["submit"]))
{
    $formdata = array(
        'companyName'=> $_POST["companyName"],
        'uname' => $_POST["uname"],
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'phone' => $_POST["phone"]
    );
    $user = array(
        $_POST["uname"] => $formdata
    );

    $existingdata = file_get_contents('../../data/transportationData.json');
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] = $user;
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

    if(file_put_contents('../../data/transportationData.json', $jsondata))
    {
        echo "Informations saved successfully <br>";
    }
    else
        echo "No data saved <br>";      
}
?>