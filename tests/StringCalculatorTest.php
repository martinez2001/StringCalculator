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

}