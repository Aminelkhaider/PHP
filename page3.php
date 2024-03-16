<?php
session_start();
if(isset($_SESSION["Name"])){
    echo "Votre nom est: ".$_SESSION["Name"]."<br>";
}
if(isset($_SESSION["Pass"])){
    echo "Votre mot de passe est: ".$_SESSION["Pass"]."<br>";
}
if(isset($_SESSION["sport"])){
    echo "Votre sport préferé est: ".$_SESSION["sport"]."<br>";
}
if(isset($_POST["repas"])){
    echo "Votre repas préféré est: ".$_POST["repas"]."<br>";
}
?>