<?php

require_once("Umamusume.php");

class Stayer extends Umamusume {


    function treinoSpeedSta(){

        $this->speed += rand(6,15);
        $this->power += rand(3, 10);

    }

    function treinoPowerSta(){

    $this->power += rand(6,12);
    $this ->speed += rand(3,6);

    }

    function treinoStaminaSta(){

    $this->stamina += rand(8, 16);
    $this->speed += rand(3,7);
    
    }



}