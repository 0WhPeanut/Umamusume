<?php

require_once("Umamusume.php");

class Velocista extends Umamusume{

    function treinoSpeedVel(){

        $this->speed += rand(8,18);
        $this->power += rand(2,7);

    }

    function treinoPowerVel(){

    $this->power += rand(8,15);
    $this ->speed += rand(2,5);

    }

    function treinoStaminaVel(){

    $this->stamina += rand(6, 12);
    $this->power += rand(1,4);

    }



}