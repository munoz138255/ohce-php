<?php

namespace Deg540\DockerPHPBoilerplate;

class Ohce
{
    public function greetings(string $name): string
    {
        $actualTime = date('H');
        if($actualTime >= 20 || $actualTime < 6){
            return '¡Buenas noches '.$name.'!';
        }
        if($actualTime >= 6 || $actualTime < 12){
            return '¡Buenos dias '.$name.'!';
        }
        if($actualTime >= 12 || $actualTime < 20){
            return '¡Buenas tardes '.$name.'!';
        }
        return 0;
    }
    public function palindrome(string $word): string{
        if($word === strrev($word)){
            return '¡Bonita palabra!';
        }
        return strrev($word);
    }
}
