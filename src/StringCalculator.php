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
            $errorPosition = strpos($number, ",\n");//check if input contains ,\n
            $errorPosition++;//Because we always want to show the position of newline, not the comma that is found first.
            if($errorPosition==true){
                return "Number expected but '\n' found at position {$errorPosition}.";
            }
            else if(substr($number,-1) == ','){
                return "Number expected but NOT found.";
            }
            else{
                $listNumbers = preg_split('/[\n,]/',$number);
                print_r($listNumbers);
                return $result = array_sum($listNumbers);
            }
        }
    }

}