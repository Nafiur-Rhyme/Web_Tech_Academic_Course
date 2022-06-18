<?php
require ("../../control/hotels/hotelRegisterprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Hotel Registration</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Company Name: </td> 
                        <td><input type = 'text' name = 'companyName'></td>
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
                        <td>Number of rooms:</td>
                        <td><input type = 'text' name = 'room'></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href = 'hotelLogin.php'>Existing member? Login</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>