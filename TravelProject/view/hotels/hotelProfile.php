<?php
session_start();
require('../../control/userControler.php');
$user = get_hotel_by_username($_SESSION["uname"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Hotel Profile</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Hotel ID:</td> 
                    </tr>

                    <tr>
                        <td>Your user name: </td> 
                    
                    </tr>
                    
                    <tr>
                        <td>E-mail: </td>
                        
                    </tr>
                        <td>Room number: </td>
                    
                    <tr>
                    <td><a href = 'hotelregister.php'>update</a></td>
                        <td><a href = '../../control/hotelprocess/hotellogutprocess.php'>Logout</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>