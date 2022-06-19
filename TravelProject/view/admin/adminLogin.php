<?php
require ("../../control/admincontrol/adminLoginprocess.php");
require ("../../control/admincontrol/adminLogout");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Admin Login </h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Admin ID:</td> 
                        <td><input type = 'text' name = 'adminID'></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='text' name='password' value =></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'Submit'></td>
                        <td><a href = 'adminregister.php'>Not registered yet?</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>