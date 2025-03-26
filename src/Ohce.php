<?php

namespace Deg540\DockerPHPBoilerplate;

class Ohce
{

    public function greetings(string $name): string
    {
        date_default_timezone_set("Europe/Madrid");
        $actualTime = date('H:i');
        if($this->isEvening($actualTime)){
            return '¡Buenas noches '.$name.'!';
        }
        if($this->isMorning($actualTime)){
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

    /**
     * @param string $actualTime
     * @return bool
     */
    public function isEvening(string $actualTime): bool
    {
        return $actualTime >= '20:00' || $actualTime < '06:00';
    }

    /**
     * @param string $actualTime
     * @return bool
     */
    public function isMorning(string $actualTime): bool
    {
        return $actualTime < '12:00' && $actualTime >= '06:00';
    }

}
