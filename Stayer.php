<?php

require_once("Umamusume.php");

class Stayer extends Umamusume {


    function treinoSpeed(){

        $this->speed += rand(6,15);
        $this->power += rand(3, 10);

    }

    function treinoPower(){

    $this->power += rand(6,12);
    $this ->speed += rand(3,6);

    }

    function treinoStamina(){

    $this->stamina += rand(8, 16);
    $this->speed += rand(3,7);
    
    }



}