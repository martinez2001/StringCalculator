<?php

namespace Deg540\PHPTestingBoilerplate;

use function PHPUnit\Framework\isEmpty;

class StringCalculator
{
    public function add(string $number): string
    {
        if(empty($number)){
            return "0";
        }
        else{
            return $number;
        }
    }

}