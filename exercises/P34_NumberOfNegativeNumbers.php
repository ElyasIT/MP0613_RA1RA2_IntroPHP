<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        // Write your code here
       $num = null;
        $count = 0;

        while(true){
            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($num < 0){
                $count ++;
            }else if($num == 0){
                echo "Number of negative numbers: $count";
                break;
            }
        }
    }
}
