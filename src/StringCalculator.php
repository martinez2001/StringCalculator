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
        else if(strpos($number,",") == false){
            //check if input string contains comma
            return $number;
        }
        else{
            $listNumbers = preg_split('/[\n,]/',$number);
            print_r($listNumbers);
            return $result = array_sum($listNumbers);
        }
    }

}