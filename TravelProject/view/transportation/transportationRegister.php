<?php
require ("../../control/transportation/transportationRegisterprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Transportation Registration Page</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>First Name:</td> 
                        <td><input type = 'text' name = 'firstName'></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td> 
                        <td><input type = 'text' name = 'lastName'></td>
                    </tr>
                    <tr>
                        <td>Employee ID:</td>
                        <td><input type = 'text' name = 'empID'></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type = 'text' name = 'email'></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='text' name='password' value =></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type='tel' name='phone' value =></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href="transportationlogin.php">Back</a></td>
                        <td><a href = 'transportationlogin.php'>Existing User? Login</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>