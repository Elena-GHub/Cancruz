<?php


use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_calculate_parameters_of_the_booking()
    {
        $guestNumber = 2;
        $nigthNumber = 1;
        $petNumber = 1;
        $breakfast = true;

        $calculator = new Calculator();
        $result= $calculator->getCalculate($guestNumber, $nigthNumber, $petNumber, $breakfast);
        $this->assertEquals(114, $result);
    }

}