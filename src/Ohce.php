<?php

namespace Deg540\DockerPHPBoilerplate;

class Ohce
{

    public function greetings(string $name): string
    {
        date_default_timezone_set("Europe/Madrid");
        $actualTime = date('H:i');
        if($actualTime >= '20:00' || $actualTime < '06:00'){
            return '¡Buenas noches '.$name.'!';
        }
        if($actualTime < '12:00' && $actualTime >= '06:00'){
            return '¡Buenos dias '.$name.'!';
        }
        return '¡Buenas tardes '.$name.'!';
    }
    public function palindrome(string $word): string{
        if($word === strrev($word)){
            return '¡Bonita palabra!';
        }
        if($word === 'Stop!'){
            return 'Adios';
        }
        return strrev($word);
    }
}
