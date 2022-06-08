<?php
require ("../Control/labtaskcontrol.php");
?>
<html>
    <head>
        <title>My Page</title>
    </head>

    <body>
        <h1>Registration</h1>
        <form action="" method="POST" >

        <table>
            <tr>
                <td>First Name: </td>
                <td><input type="text" name="fname"></td>
            </tr>
           
           <tr>
               <td>Last Name:</td>
               <td><input type="text" name="lname"></td>
           </tr>
           
           <tr>
               <td>Age:</td>
               <td><input type="text" name="age"></td>
           </tr>
            
            
            <tr>
                <td>Designation:</td>
                <td><input type="radio" name="designation">Junior Programmer</td>
                <td><input type="radio" name="designation">Senior Programmer</td>
                <td><input type="radio" name="designation">Project Lead</td>
            </tr>
            
            <tr>
                <td>Prefered Language:</td>
                
                <td><input type="checkbox" name="preferredlanguage">JAVA</td>
                <td><input type="checkbox" name="preferredlanguage">PHP</td>
                <td><input type="checkbox" name="preferredlanguage">C++</td>
            
            </tr>
            <tr>
                <td>E-Mail:</td>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>Please choose a file:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name = "submission" value="Submit">
                   <input type="reset" name = "submission" value="Reset">
                 </td>   
            </tr>

        </table>
        </form>
    </body>
    
</html>