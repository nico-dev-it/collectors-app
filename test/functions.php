<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testSuccessDisplayCards_1()
    {
        $input = [['name' => 'England', 'place' => 'Lulworth', 'landmark' => 'Durdle Door', 'activity' => 'Walking', 'food' => 'sea food']];
        $actualOutput = displayCards($input);
        $this->assertIsString($actualOutput);

    }

    public function testSuccessDisplayCards_2()
    {
        $input = [['name' => 'England', 'place' => 'Lulworth', 'landmark' => 'Durdle Door', 'activity' => 'Walking', 'food' => 'sea food']];
        $expectedOutput = '<div class="countryCard"><div class="name"><p>England</p></div><div class="items"><p>Place: Lulworth</p><p>Landmark: Durdle Door</p><p>Activity: Walking</p><p>Food: sea food</p></div></div>';
        $actualOutput = displayCards($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testFailureDisplayCards()
    {
        $input = [['nametest1' => 'test1']];
        $expectedOutput = '';
        $actualOutput = displayCards($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}

