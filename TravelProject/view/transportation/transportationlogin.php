<?php
require ("../../control/transportation/transportationloginprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Transportation Login Page</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Employee ID:</td> 
                        <td><input type = 'text' name = 'empID'></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='text' name='password' value =></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></button></td>
                        <td><a href = 'transportationregister.php'>Not registered yet?</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>