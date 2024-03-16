<?php
session_start();

?>
<html>
    <body>
        <br><br><br>
        <form action="page2.php" method="post">
            Name:  <input type="text" name="Name" required>
            <br><br>
            Mot de passe: <input type="password" name="Pass" required>
            <br><br>
            Sport préferé :
            <br><br>
            Football<input type="radio" name="sport" value="football" required>
            Tennis<input type="radio" name="sport" value="tennis">
            Basketball<input type="radio" name="sport" value="basketball">
            Natation<input type="radio" name="sport" value="natation">
            <br><br>
            <input type="submit" value="Suivant" style="background-color: silver;">
        </form>
    </body>
</html>