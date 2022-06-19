<?php
session_start();
require('../../control/userControler.php');
$user = get_transportation_by_username($_SESSION["uname"]);
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
                        <td>Your Company name is <?php echo $user[$_SESSION["uname"]]['companyName']?></td> 
                        
                    </tr>

                    <tr>
                        <td>Your user name <?php echo $user[$_SESSION["uname"]]['uname']?></td> 
                    
                    </tr>
                    <tr>
                        <td>Your email is <?php echo $user[$_SESSION["uname"]]['email']?></td>
                    
                    </tr>
                    
                    
                    <tr>
                        <td><a href = 'transportationregister.php'>update</a></td>
                        <td><a href = "../../control/transportationcontrol/transportationLogoutprocess.php">Logout</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>