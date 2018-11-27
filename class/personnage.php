<?php

class personnage{
    public $vie = 100;
    public $forceMagique = 20;
    public $soin = 20;
    public $nom = 'Pas de nom';
    public $armure = 15;
    public $forceBrute = 25;

    public function __construct($nom, $soin){     //  lien avec les parametres de new personnage
        $this -> nom = $nom;               
        $this -> soin = $soin;
    }

    public function regenere($bonusVie = 0 ){         // 20 = valeur par défaut
        if ($bonusVie == 0) {
            $bonusVie = $this -> soin;
        }
        
        $this -> vie += $bonusVie;                     // rajouter des points
        echo '<br>'. $this -> nom . ' regenere de ' . $bonusVie.' point(s) de vie. <br> Il a maintenant '. $this -> vie. 'point(s) de vie <br> <hr> ';
    }

    public function decrire(){
        echo '<br>'. $this -> nom . '  a '. $this -> vie . ' point(s) de vie, '. $this -> force. '  point(s) de force et ' . $this -> soin . ' point(s) de soin.<br> <hr>';
    }


    public function attaqueMagique(personnage $defenseur){
        $defenseur -> vie  -= $this -> forceMagique;
        echo $this -> nom . ' attaque magiquement '. $defenseur -> nom.'.<br>';
        echo $defenseur -> nom . ' perd '. $this -> forceMagique. ' points de vie, il lui en reste '. $defenseur -> vie.' .<br>';
        
        if ( $defenseur -> envie()){           // par defaut, = true
            echo $defenseur -> nom . ' est toujours vivant. <br> <hr>';
         } else {
         echo $defenseur -> nom . ' est mort ! <br> <hr>';
         };    
    }

    public function attaqueBrute (personnage $defenseur){
        $tot = ($this -> forceBrute) - ($defenseur -> armure);
        $defenseur -> vie  -= $tot;
        echo $this -> nom . ' attaque brutalement '. $defenseur -> nom.'.<br>';
        echo $defenseur -> nom . ' perd '. $tot. ' points de vie, il lui en reste '. $defenseur -> vie.' .<br>';
        
        if ( $defenseur -> envie()){           // par defaut, = true
            echo $defenseur -> nom . ' est toujours vivant. <br> <hr>';
         } else {
         echo $defenseur -> nom . ' est mort ! <br> <hr>';
         };  


    }

    public function enVie(){
        if ($this -> vie <= 0){
            return  false;
        } else {
            return true;
        }
    }



};

?>