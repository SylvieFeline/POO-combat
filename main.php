<?php

require 'class/personnage.php';   // lien avec page personnage dans dossier class


$georges = new personnage('Georges', 25);   // $georges est une instance de personnage
$lucas = new personnage('Lucas', 30);

// var_dump($georges);                     // renvoie le contenu de l'objet georges
// var_dump($lucas);

$lucas -> decrire();
$georges -> decrire();

$georges -> regenere(10);                 // appel de la méthode
$lucas -> regenere();
// var_dump($georges);
// var_dump($georges -> vie);             //  renvoie que la valeur du parametre vie

$georges -> decrire();                    // instance de georges pour la méthode décrire
$lucas -> decrire();

$georges -> attaqueMagique ($lucas);
$lucas -> attaqueMagique ($georges);

$georges -> attaqueBrute ($lucas);
$lucas -> attaqueBrute ($georges);

// while (($georges -> vie >= 0) && ($lucas -> vie >= 0)) {     // fait 1 boucle en trop !
while (($georges -> enVie()) && ($lucas -> enVie())){
$georges -> attaqueMagique ($lucas);
$lucas -> attaqueMagique ($georges);
}

?>