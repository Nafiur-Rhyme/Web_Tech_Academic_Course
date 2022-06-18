<?php

require ("../../control/travelercontrol/travelerRegisterprocess.php");
require ("../../control/travelercontrol/travelerDataprocess.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Travler Registration Page</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST', enctype="multipart/form-data">
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
                        <td>User Name:</td>  
                        <td><input type = 'text' name = 'uname'><?php echo $unameError; ?></td>
                    </tr>
                    <tr>
                        <td>Age:</td> 
                        <td><input type = 'text' name = 'age'><?php echo $ageError; ?></td>
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
                        <td>Attach your voter id :</td>
                        <td><input type="file"><?php echo $fileError; ?></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href = 'travelerlogin.php'>Existing User? Login</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>