<?php
//session_start();
require ("../../control/travelercontrol/startTripprocess.php");
require('../../control/userControler.php');

$user = get_traveler_by_username($_SESSION["username"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Your Profile</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>First Name:</td>
                        <td><?php echo $user[$_SESSION["username"]]['firstName'] ?></td> 
                    </tr>
                    <tr>
                        <td>Last Name:</td> 
                        <td><?php echo $user[$_SESSION["username"]]['lastName'] ?></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><?php echo $user[$_SESSION["username"]]['email'] ?></td>
                    </tr>
                    <tr>
                        <td><a href = 'travlerregister.php'>update</a></td>
                        <td><a href = "../../control/travelercontrol/travelerLogoutprocess.php">Logout</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>