<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testSuccessDisplayCardsString()
    {
        $input = [['name' => 'England', 'place' => 'Lulworth', 'landmark' => 'Durdle Door', 'activity' => 'Walking', 'food' => 'sea food']];
        $output = displayCards($input);
        $this->assertIsString($output);

    }

    public function testSuccessDisplayCardsCorrectOutput()
    {
        $input = [['name' => 'England', 'place' => 'Lulworth', 'landmark' => 'Durdle Door', 'activity' => 'Walking', 'food' => 'sea food']];
        $expectedOutput = '<div class="countryCard"><div class="name"><p>England</p></div><div class="items"><p>Place: Lulworth</p><p>Landmark: Durdle Door</p><p>Activity: Walking</p><p>Food: sea food</p></div></div>';
        $actualOutput = displayCards($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    //Failure test because wrong data. It will return an empty string.
    public function testFailureDisplayCards()
    {
        $input = [['nametest1' => 'test1']];
        $expectedOutput = '';
        $actualOutput = displayCards($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}
