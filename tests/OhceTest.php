<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function givenNameAsierBetween8pmAnd6amReturnsBuenasNochesAsier()
    {
        $ohce = new Ohce();

        $actualTime = date('H');
        if($actualTime < 20 || $actualTime > 6) {
            $this->markTestSkipped('No estamos en este intervalo horario');
        }

        $result = $ohce->greetings('Asier');

        $this->assertEquals('¡Buenas noches Asier', $result);
    }

}
