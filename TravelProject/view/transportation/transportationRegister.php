<?php
require ("../../control/transportationcontrol/transportationRegisterprocess.php");
require ("../../control/transportationcontrol/transportationDataprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Transportation Registration</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST', enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Company Name: </td> 
                        <td><input type = 'text' name = 'companyName'></td>
                    </tr>
                    <tr>
                        <td>User Name: </td> 
                        <td><input type = 'text' name = 'uname'></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type = 'text' name = 'email'></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type = 'tel' name = 'phone'></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='password' name='password' value =></td>
                    </tr>
                    <tr>
                        <td>Number of seats:</td>
                        <td><input type = 'text' name = 'seats'></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href = 'transportationLogin.php'>Existing member? Login</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>