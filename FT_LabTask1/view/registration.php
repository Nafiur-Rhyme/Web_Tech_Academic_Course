
<!DOCTYPE html>
<head>
    <h1>Registration Form</h1>
    <hr>
</head>
<body>
<?php require("../control/registrationcontrol.php") ?>
    <form action="" method="post" enctype="multipart/form">
        <table>
            <tr>
                <td>First Name:</td><td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td><td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Age:</td><td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>Designation:</td>
                <td>
                    <input type="radio" name="designation" value="juniorprogrammer">Junior Programmer 
                    <input type="radio" name="designation" value="seniorprogrammer">Senior Programmer
                    <input type="radio" name="designation" value="projectlead">Project Lead 
                    
                </td>
            </tr>  
            <tr>
                <td>Preferred Language:</td>
                <td>
                    <input type="checkbox" name="planguage" value="java">JAVA
                    <input type="checkbox" name="planguage" value="php">PHP
                    <input type="checkbox" name="planguage" value="c++">C++
                </td>
            </tr> 
            
            <tr>
                <td>Email:</td><td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password:</td><td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Please choose a file:</td>
                <td><input type="file" name="picture"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit">
                <td><input type="reset" name="reset" value="Reset">
            </tr>
        </table>
    </form> 
</body>
</html>
