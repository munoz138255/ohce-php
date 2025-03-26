<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->ohce = new Ohce();
        $this->actualTime = date('H:i');
    }

    /**
     * @test
     */
    public function givenNameAsierBetween8pmAnd6amReturnsBuenasNochesAsier()
    {
        if($this->actualTime < 20 || $this->actualTime >= 6) {
            $this->markTestSkipped('No estamos en este intervalo horario');
        }

        $result = $this->ohce->greetings('Asier');

        $this->assertEquals('¡Buenas noches Asier', $result);
    }

    /**
     * @test
     */
    public function givenNameAsierBetween6amAnd12pmReturnsBuenosDiasAsier()
    {
        if($this->actualTime < 6 || $this->actualTime >= 12) {
            $this->markTestSkipped('No estamos en este intervalo horario');
        }

        $result = $this->ohce->greetings('Asier');

        $this->assertEquals('¡Buenos dias Asier!', $result);
    }
    /**
     * @test
     */
    public function givenNameAsierBetween12pmAnd8pmReturnsBuenasTardesAsier()
    {

        if($this->actualTime < 12 || $this->actualTime >= 20) {
            $this->markTestSkipped('No estamos en este intervalo horario');
        }

        $result = $this->ohce->greetings('Asier');

        $this->assertEquals('¡Buenas tardes Asier!', $result);
    }

    /**
     * @test
     */
    public function givenAWordReturnReversedWord()
    {

        $result = $this->ohce->palindrome('hola');

        $this->assertEquals('aloh', $result);
    }

    /**
     * @test
     */
    public function givenAPalindromeWordReturnBonitaPalabra()
    {

        $result = $this->ohce->palindrome('oto');

        $this->assertEquals('¡Bonita palabra!', $result);
    }

    /**
     * @test
     */
    public function givenWordstopWordReturnspots()
    {

        $result = $this->ohce->palindrome('stop');

        $this->assertEquals('pots', $result);
    }

    /**
     * @test
     */
    public function givenWordStopWithExclamationWordReturnsAdiosAndFinishes()
    {

        $result = $this->ohce->palindrome('Stop!');

        $this->assertEquals('Adios', $result);
    }
}

