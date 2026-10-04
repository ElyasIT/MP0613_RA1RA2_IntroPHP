<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        // Write your code here
       $num = null;
        $p = 0;
        $count = 0;

        while(true){
            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($num > 0 || $num < 0){
                $p += $num;
                $count ++;
            }else {
                echo "Number of numbers: $count";
                echo "Sum of the numbers: $p";
                break;
            }
        }
    }
}
