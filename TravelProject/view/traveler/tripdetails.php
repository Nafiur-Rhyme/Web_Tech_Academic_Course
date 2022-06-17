<!DOCTYPE html>
<html>
    <head>
        <h1>START A TRIP</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>Check in:</td> 
                        <td><input type = 'datetime-local' name = 'checkin'></td>
                    </tr>
                    <tr>
                        <td>Check out:</td> 
                        <td><input type = 'datetime-local' name = 'checkout'></td>
                    </tr>
                    <tr>
                        <td>Guest(s):</td>
                        <td><input type = 'text' name = 'guestnumb'></td>
                    </tr>
                    <tr>
                        <td>Room(s)</td>
                        <td><input type = 'text' name = 'room'></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></td>
                        <td><input type = 'reset' name = 'reset' value = 'RESET'></td>
                    </tr>
                    <tr>
                        <td><a href="starttrip.php">Back</a></td>
                        
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>