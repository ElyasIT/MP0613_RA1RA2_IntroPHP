<?php

class P19_Positivity
{
    public function main(): void
    {
        echo "Give a number: ";
        // Write your code here
        // Prompt the user for input
       $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user

        // Check year value
        if ($number > 0) {
            echo "The number is positive.\n";
        } else {
            echo "The number is not positive.\n";
        }
    }
}
