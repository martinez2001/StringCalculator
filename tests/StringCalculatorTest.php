<?php

namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function no_numbers_return_0(){
        $calculator = new StringCalculator();

        $result = $calculator->add("");

        $this->assertEquals(expected: "0",actual: $result);
    }

    /**
     * @test
     */
    public function one_number_returns_that_number(){
        $calculator = new StringCalculator();

        $result = $calculator->add("1");

        $this->assertEquals(expected: "1",actual: $result);
    }

    /**
    * @test
    */
    public function two_numbers_separated_by_comma_return_their_sum(){
        $calculator = new StringCalculator();

        $result = $calculator->add("4.2,2");

        $this->assertEquals(expected: "6.2",actual: $result);
    }


}