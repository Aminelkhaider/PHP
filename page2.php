<?php
session_start();
$_SESSION['sport'] = $_POST['sport'];
$_SESSION['Name'] = $_POST['Name'];
$_SESSION['Pass'] = $_POST['Pass'];

?>
<html>
    <body>
        <form action="page3.php" method="post">
        Repas préferé :
            <br><br>
            Tajine<input type="radio" name="repas" value="Tajine">
            Couscous<input type="radio" name="repas" value="Couscous">
            Bastila<input type="radio" name="repas" value="Bastila">
            <br><br>
		
            <input type="submit" value="precedent" formaction="page1.php">
            <input type="submit" value="Valider" style="background-color: green;">
        </form>
    </body>
</html>