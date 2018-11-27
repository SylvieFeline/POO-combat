<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Combat</title>
</head>
<body>
    
    <!-- <form action="./action.php" method="post" >

        <div id="perso1">
        <h2>Données du premier personnage :</h2>
        Nom du personnage : <input type="text" name="nom1"> <br>
        Nombre de point(s) de vie : <input type="number" name="vie1" > <br>
        Valeur de sa force Magique : <input type="number" name="forceMagique1"> <br>
        Valeur de sa force Brute : <input type="number" name="forceBrute1"> <br>
        valeur de son armure :  <input type="number" name="armure1"> <br>
        Valeur du soin :  <input type="number" name="soin1"> <br>

        </div>

        <div id="perso2">
        <h2>Données du second personnage :</h2>
        Nom du personnage : <input type="text" name="nom2"> <br>
        Nombre de point(s) de vie : <input type="number" name="vie2" > <br>
        Valeur de sa force Magique : <input type="number" name="forceMagique2"> <br>
        Valeur de sa force Brute : <input type="number" name="forceBrute2"> <br>
        valeur de son armure :  <input type="number" name="armure2"> <br>
        Valeur du soin :  <input type="number" name="soin2"> <br>

        </div>

        <input type="submit" value="Envoyer">

    </form> -->
<main>
    <?php
        require 'class/persoForm.php';
        require 'class/formulaire.php';

        function formCreate(){
            $formu[0] = new formulaire(0);
            $formu[1] = new formulaire(1);

            $formu[0] -> addI();
            $formu[1] -> addI();

            return ($formu);
        }

        $myForm = formCreate();

        echo '<form action="./action.php" method="get" name="monForm"><ul>';
        echo $myForm[0] -> echoForm().$myForm[1] -> echoForm().'<li> <input type="submit" value ="creer"></li></ul></form>';


?>

</main>

</body>
</html>