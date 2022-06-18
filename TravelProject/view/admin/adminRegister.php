<?php
require ("../../control/admincontrol/adminRegisterprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Admin Registration Page</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                <tr>
                        <td>First Name:</td> 
                        <td><input type = 'text' name = 'firstName'><?php echo $firstNameError; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td> 
                        <td><input type = 'text' name = 'lastName'><?php echo $lastNameError; ?></td>
                    </tr>
                    <tr>
                        <td>Employee ID:</td>
                        <td><input type = 'text' name = 'empID'><?php echo $empIDError; ?></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type = 'text' name = 'email'><?php echo $emailError; ?></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='text' name='password' value =><?php echo $passwordError; ?></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type='tel' name='phone' value =><?php echo $phoneError; ?></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href = 'adminLogin.php'>Existing User? Login</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>