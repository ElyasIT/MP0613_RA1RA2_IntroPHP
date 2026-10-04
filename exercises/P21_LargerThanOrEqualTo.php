<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        // Write your code here
        // Prompt the user for input
    echo "Give the first number: \n";

    echo "Give the second number: \n";
        // Get input from the user
        
        // Prompt the user for input
        
        // Get input from the user

        // Check year value
        $year1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        $year2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        if ($year1 > $year2) {
            echo "Greater number is: " . $year1 . "\n";
        } else if ($year2 > $year1) {
            echo "Greater number is: " . $year2 . "\n";
        } else {
            echo "The numbers are equal!\n";
        }
    }
}
