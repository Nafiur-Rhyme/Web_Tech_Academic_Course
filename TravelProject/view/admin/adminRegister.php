<?php
require ("../../control/admincontrol/adminRegisterprocess.php");
require ("../../control/admincontrol/adminDataprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Admin Registration</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Admin ID: </td> 
                        <td><input type = 'text' name = 'adminID'><?php echo $adminIDError?></td>
                    </tr>
                    <tr>
                        <td>User Name: </td> 
                        <td><input type = 'text' name = 'uname'><?php echo $unameError?></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type = 'text' name = 'email'><?php echo $emailError?></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><input type = 'tel' name = 'phone'><?php echo $phoneError?></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='password' name='password' value =><?php echo $passwordError?></td>
                    </tr>
                    
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href = 'adminLogin.php'>Existing member? Login</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>