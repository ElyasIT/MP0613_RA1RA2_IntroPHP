<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        // Write your program here
       $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while($num <= 100){
            echo "$num\n";
            $num++;
        }
    }
}
