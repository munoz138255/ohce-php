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

        return 0;
    }
}
