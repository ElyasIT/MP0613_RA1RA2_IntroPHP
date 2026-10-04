<?php

class P20_Adulthood
{
    public function main(): void
    {
        // Write your code here
        echo "How old are you? ";
        // Prompt the user for input
        
       $year = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        // Get input from the user

        // Check year value
        if ($year >= 18) {
            echo "You are an adult.\n";
        } else {
            echo "You are not an adult.\n";
        }   
    }
}
