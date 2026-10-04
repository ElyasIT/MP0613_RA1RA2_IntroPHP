<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here
       
       $sum = $numA + $numB;
       $rest = $numA - $numB;
       $mul = $numA * $numB;
       $div = number_format($numA / $numB, 1);
        echo "$numA + $numB = $sum\n";
        echo "$numA - $numB = $rest\n";
        echo "$numA * $numB = $mul\n";
        echo "$numA / $numB = $div\n";
    }
}
