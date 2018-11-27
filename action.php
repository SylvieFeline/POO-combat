<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Combat</title>
</head>
<body>


<main>

<?php

require 'class/persoForm.php';
// require 'class/formulaire.php';

// echo htmlspecialchars($_GET['nom0']).'<br>';
// echo htmlspecialchars($_GET['nom1']);

// if (isset($_GET['nom1']) AND isset($_GET['vie1']) AND isset($_GET['forceMagique1']) AND 
//     isset($_GET['forceBrute1']) AND isset($_GET['armure1']) AND isset($_GET['soin1'])AND
//     isset($_GET['nom0']) AND isset($_GET['vie0']) AND isset($_GET['forceMagique0']) AND 
//     isset($_GET['forceBrute0']) AND  isset($_GET['armure0']) AND isset($_GET['soin0'])) {

$perso1 = new personnage($_GET['nom0'],$_GET['vie0'],$_GET['forceMagique0'],$_GET['forceBrute0'],$_GET['armure0'],$_GET['soin0']);
// $perso1 = new personnage($_GET['nom0'],intval($_GET['vie0']), ...      dans le cas d'input text pour des valeurs numériques

$perso2 = new personnage($_GET['nom1'],$_GET['vie1'],$_GET['forceMagique1'],$_GET['forceBrute1'],$_GET['armure1'],$_GET['soin1']);

// }

$perso1 -> decrire();
$perso2 -> decrire();

if (rand(0,1)){
    while($perso1 ->enVie() && $perso2->enVie()){
        $perso1->hasard($perso2);
        if($perso1 ->enVie() && $perso2->enVie()){
            $perso2->hasard($perso1);
        }
    }
}else {
    while($perso1 ->enVie() && $perso2->enVie()){
        $perso2->hasard($perso1);
        if($perso1 ->enVie() && $perso2->enVie()){
            $perso1->hasard($perso2);
        }
    }
}

?>

</main>
</body>
</html>