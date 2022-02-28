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

    /**
     * @test
     */
    public function many_numbers_can_be_added(){
        $calculator = new StringCalculator();

        $result = $calculator->add("2,2,2,2,2");

        $this->assertEquals(expected: "10",actual: $result);
    }

    /**
     * @test
     */
    public function add_newlines_as_separator(){
        $calculator = new StringCalculator();

        $result = $calculator->add("1\n2,3\n11");

        $this->assertEquals(expected: "17",actual: $result);
    }

    /**
     * @test
     */
    public function delimiter_comma_followed_by_newline_is_invalid(){
        $calculator = new StringCalculator();

        $result = $calculator->add("175.2,\n35");

        $this->assertEquals(expected: "Number expected but '\n' found at position 6.",actual: $result);
    }

    /**
     * @test
     */
    public function missing_number_in_last_position_is_invalid(){
        $calculator = new StringCalculator();

        $result = $calculator->add("1,3,");

        $this->assertEquals(expected: "Number expected but NOT found.",actual: $result);
    }


}