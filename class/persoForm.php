<!-- <!DOCTYPE html>
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
<main> -->

<?php          // a partir formulaire :

class personnage{ 
    public $nom = 'pas de nom' ;               
    public $vie = 100;
    public $forceMagique = 20;
    public $forceBrute = 25;
    public $armure = 15;
    public $soin = 20;
    
    
    

    public function __construct($nom, $vie, $forceMagique, $forceBrute, $armure, $soin){     
        $this -> nom = $nom; 
        $this -> vie = $vie;
        $this -> forceMagique = $forceMagique;
        $this -> forceBrute = $forceBrute;
        $this -> armure = $armure;              
        $this -> soin = $soin;
    }

    public function regenere($bonusVie = 0 ){         // 0 = valeur par défaut
        if ($bonusVie == 0) {
            $bonusVie = $this -> soin;
        }
        
        $this -> vie += $bonusVie;                     // rajouter des points
        echo '<i class="fas fa-flask"></i><strong> '. $this -> nom . '</strong> regenere de ' . $bonusVie.' point(s) de vie. <br> Il a maintenant '. $this -> vie. ' point(s) de vie <br> <hr> ';
    }

    public function decrire(){
        echo '<strong> '. $this -> nom . '</strong>  a '. $this -> vie . ' point(s) de vie, '. $this -> forceBrute . '  point(s) de force Brute, '. $this -> forceMagique .' point(s) de force magique et ' . $this -> soin . ' point(s) de soin.<br> <hr>';
    }


    public function attaqueMagique(personnage $defenseur){           // peut rajouter
        $defenseur -> vie  -= $this -> forceMagique;
        echo '<i class="fas fa-hat-wizard"></i> <strong> '.$this -> nom . '</strong> attaque magiquement '. $defenseur -> nom.'.<br>';
        echo '<strong> '.$defenseur -> nom . '</strong> perd '. $this -> forceMagique. ' points de vie, il lui en reste '. $defenseur -> vie.' .<br>';
        
        if ( $defenseur -> envie()){           // par defaut, = true
            echo '<strong>'.$defenseur -> nom . '</strong> est toujours vivant. <br> <hr>';
         } else {
         echo '<strong> '.$defenseur -> nom . '</strong> est mort ! <br> <hr>';
         };    
    }

    public function attaqueBrute (personnage $defenseur){
        $tot = ($this -> forceBrute) - ($defenseur -> armure);
        $defenseur -> vie  -= $tot;
        echo '<i class="fas fa-fist-raised"></i> <strong>'. $this -> nom . '</strong> attaque brutalement '. $defenseur -> nom.'.<br>';
        echo '<strong> '.$defenseur -> nom . '</strong> perd '. $tot. ' points de vie, il lui en reste '. $defenseur -> vie.' .<br>';
        
        if ( $defenseur -> envie()){           // par defaut, = true
            echo '<strong>'.$defenseur -> nom . '</strong> est toujours vivant. <br> <hr>';
         } else {
         echo '<i class="fas fa-skull-crossbones"></i><strong> '.$defenseur -> nom . '</strong> est mort ! <br> <hr>';
         };  


    }

    public function enVie(){
        if ($this -> vie <= 0){
            return  false;
        } else {
            return true;
        }
    }


        public function hasard($defenseur){
            $whatNow = rand(0,2);
            if (!$whatNow){                  // = $whatNow == 0
                $this ->regenere();
            }elseif ($whatNow == 1){
                $this ->attaqueMagique($defenseur);
            }else {
                $this ->attaqueBrute($defenseur);
            }
            
        }





};

?>

<!-- </main>

</body>
</html> -->