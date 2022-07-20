<?php

class databaseConnection{

    function openCon(){
        $dataBaseHost = 'localhost';
        $dataBaseUser = 'root';
        $dataBasePass = '';
        $dataBase = 'labtask';

        $connection = new mysqli($dataBaseHost, $dataBaseUser, $dataBasePass, $dataBase);

        return $connection;
    }

    function userRegistration($connection, $table, $fname, $lname, $age, $designation, $planguage,$email,$password,$picture){
        $sqlQuery = "INSERT INTO $table (fname, lname, age, designation, planguage, email, password, picture) VALUES ('$fname', '$lname', '$age', '$designation', '$planguage','$email','$password','$picture')";
        $result = $connection->query($sqlQuery);
        return $result;
    }
    function showUser($tablename,$fname,$conn)
    {
        $sqlQuery="SELECT * FROM $tablename WHERE fname='$fname'";
        return $conn->query($sqlQuery);
    }


    function closeCon($connection)
    {
        $connection -> close();
    }
}
?>