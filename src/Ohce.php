<?php

namespace Deg540\DockerPHPBoilerplate;

class Ohce
{
    function greetings(string $name): string
    {
        $actualTime = date('H');
        if($actualTime >= 20 || $actualTime < 6){
            return '¡Buenas noches '.$name.'!';
        }
        if($actualTime >= 6 || $actualTime < 12){
            return '¡Buenos dias '.$name.'!';
        }
        return 0;
    }
}
