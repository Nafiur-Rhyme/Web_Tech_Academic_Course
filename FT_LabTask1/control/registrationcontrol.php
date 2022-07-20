<?php

    include("../model/databaseConnection.php");

    $registrationError = "";

    if(isset($_POST['submit'])){
        $connection = new databaseConnection();
        $connectionObject = $connection->openCon();
        $registerUser = $connection->userRegistration($connectionObject, "employee", $_REQUEST["fname"], $_REQUEST["lname"], $_REQUEST["age"], $_REQUEST["designation"] , $_REQUEST["planguage"],$_REQUEST["email"], $_REQUEST["password"], $_REQUEST["picture"]);
        if($registerUser){
            $registrationError = 'Registraion Successful'; 
        }
        else{
            $registrationError = 'Registraion Unsuccessful';
        }

        $connection = new databaseConnection();
        $connectionObject = $connection->openCon();
        $results = $connection->showUser("employee", $_REQUEST["fname"],$connectionObject);

        if($results->num_rows >0)
        {
        while ($myrows=$results->fetch_assoc())
        {
                $fname='fname';
                $lname='lname';
                $age='age';
                $designation='designation';
                $PL= 'panguage';
                $email='email';
                $file='picture';
                echo "<table border='1'>";
                echo "
                    <tr>
                        <th> " . $fname ." </th>
                        <th> ".$lname."</th>
                        <th> ".$age."</th>
                        <th> ".$designation."</th>
                        <th> ".$PL."</th>
                        <th>".$email." </th>
                        <th> ".$file."</th>
                    </tr>";
                echo "<tr>";
                echo "<td>".$myrows["fname"]."</td>";
                echo "<td>".$myrows["lname"]."</td>";
                echo "<td>".$myrows["age"]."</td>";
                echo "<td>".$myrows["designation"]."</td>";
                echo "<td>".$myrows["planguage"]."</td>";
                echo "<td>".$myrows["email"]."</td>";
                echo "<td>".$myrows["picture"]."</td>";
                echo "</tr>";
        }
            echo "</table>";
        }
        $connection->closeCon($connectionObject);
    }
?>