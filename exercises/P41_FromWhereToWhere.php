<?php

class P41_FromWhereToWhere
{
    public function main(): void
    {
        // Write your program here
       echo "Where to? ";
        $num1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        echo "Where from? ";
        $num2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        while($num2 <= $num1){
            echo "$num2\n";
            $num2++;
        }
    }
}
