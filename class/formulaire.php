<?php
class formulaire {
    public $num = 0;
    public $nom = '<input type="text" value="" name="nom';
    public $vie = '<input type="number" value="" name="vie';
    public $forceMagique = '<input type="number" value="" name="forceMagique';
    public $forceBrute = '<input type="number" value="" name="forceBrute';
    public $armure = '<input type="number" value="" name="armure';
    public $soin = '<input type="number" value="" name="soin';



    public function __construct($i){
        $this ->num = $i;
    }

    public function addI(){
        $this -> nom .=$this ->num.'">';
        $this -> vie .=$this ->num.'">';
        $this -> forceMagique .=$this ->num.'">';
        $this -> forceBrute .=$this ->num.'">';
        $this -> armure .=$this ->num.'">';
        $this -> soin .=$this ->num.'">';
    }

    public function echoForm() {
        echo '<li> nom perso'.$this ->num.' : '.$this ->nom .'</li>';
        echo '<li> vie perso'.$this->num.' : '.$this ->vie.'</li>';
        echo '<li> forceMagique'.$this ->num. ' : '.$this->forceMagique.'</li>';
        echo '<li> forceBrute'.$this ->num. ' : ' .$this->forceBrute.'</li>';
        echo '<li> armure' . $this ->num. ' : ' .$this->armure. '</li>';
        echo '<li> soin' . $this ->num. ' : ' .$this->soin. '</li>';
    }


     




}


?>