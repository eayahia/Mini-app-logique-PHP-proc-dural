<?php
$nom = "Yahia";
$age = 19;
$prix = 9.99;
$estConnecte = true;







echo "Nom : " . $nom . "<br>";

echo "Age : " .$age . "<br>";

echo "Prix : " . $prix . "€<br>";

echo "Connecté : " .($estConnecte ? "Oui" : "Non")  ."<br>";


var_dump($nom);



gettype ($nom) ;



$nombre = "100";

$nombreInt = (int)$nombre;

echo "Conversion : " . $nombreInt;

