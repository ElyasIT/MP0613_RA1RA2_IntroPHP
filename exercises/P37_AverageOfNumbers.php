<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        // Write your code here
       $num = null;
        $avg = 0;
        $count = 0;
        $p = 0;

        while(true){
            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($num != 0){
                $count ++;
                $p += $num;
                $avg = $p / $count;
                
            }else {
                
                echo "Average of the numbers: $avg";
                break;
            }
        }
    }
}
