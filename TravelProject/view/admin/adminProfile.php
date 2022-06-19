<?php
session_start();
require('../../control/userControler.php');
$user = get_admin_by_ID($_SESSION["adminID"]);
//print_r($user);
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
                        <td>Your ID is <?php echo $user[$_SESSION["adminID"]]['adminID']; ?> </td> 
                        
                    </tr>

                    <tr>
                        <td>Your user name <?php echo $user[$_SESSION["adminID"]]['uname']; ?></td> 
                    
                    </tr>
                    <tr>
                        <td>Your email is <?php echo $user[$_SESSION["adminID"]]['email']; ?></td>
                    
                    </tr>
                    
                    
                    <tr>
                        <td><a href = 'adminregister.php'>update</a></td>
                        <td><a href = '../../control/admincontrol/adminlogoutprocess.php'>Logout</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>