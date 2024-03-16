<html>
    <body>
        
    </body>
</html>
<?php
$my_var = 'Hello, world!';

//global
function my_function() {
    global $my_var;
    echo $my_var;
    echo $GLOBALS['my_var'];
}

my_function(); // Affiche 'Hello, world!'
//$_SERVER : Cette variable contient des
//informations sur le serveur et la requête HTTP en cours.
echo $_SERVER['SERVER_NAME'];
//$_REQUEST : Cette variable contient les données de la requête HTTP en cours, 
//qu'elles aient été envoyées par GET ou POST. Par exemple, si vous avez un 
//formulaire HTML qui contient un champ nommé "username",
// vous pouvez accéder à la valeur de ce champ avec $_REQUEST['username'].
echo $_REQUEST['username'];
?>
<!-- //$_POST : Cette variable contient les données envoyées par une requête HTTP POST.
// Par exemple, si vous avez un formulaire HTML qui utilise la méthode POST et qui
// contient un champ nommé "password",
//vous pouvez accéder à la valeur de ce champ avec $_POST['password']. -->
<form method="POST" action="process.php">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST['name']; // Output: the value of the 'name' input field
}
?>
<?php
//$_SESSION : Cette variable contient les données de session, qui sont stockées
// sur le serveur et qui permettent de conserver des informations d'un utilisateur
// d'une page à l'autre.
session_start();

$_SESSION['user_id'] = 1234;

echo $_SESSION['user_id']; // Affiche '1234'
//isset() est une fonction prédéfinie qui permet de vérifier
// si une variable est définie et n'est pas NULL.
isset($variable);






