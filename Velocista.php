<?php

require_once("Umamusume.php");

class Velocista extends Umamusume{

    function treinoSpeed(){

        $this->speed += rand(8,18);
        $this->power += rand(2,7);

    }

    function treinoPower(){

    $this->power += rand(8,15);
    $this ->speed += rand(2,5);

    }

    function treinoStamina(){

    $this->stamina += rand(6, 12);
    $this->power += rand(1,4);

    }



}