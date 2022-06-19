<?php
require ("../../control/admincontrol/adminProfileprocess.php");
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
                        <td>Your ID is <?php echo $adminID; ?> </td> 
                        
                    </tr>

                    <tr>
                        <td>Your user name <?php echo $uname; ?></td> 
                    
                    </tr>
                    <tr>
                        <td>Your email is <?php echo $email; ?></td>
                    
                    </tr>
                    
                    
                    <tr>
                        <td><a href = 'adminregister.php'>update</a></td>
                        <td><a href = 'adminlogin.php'>Logout</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>