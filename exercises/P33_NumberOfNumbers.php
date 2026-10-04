<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        // Write your code here
        $num = null;
        $count = 0;

        while(true){
            echo "Give a number: ";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            
            if($num != 0){
                $count ++;
            }else{
                echo "Number of numbers: $count";
                break;
            }
    }
}
}