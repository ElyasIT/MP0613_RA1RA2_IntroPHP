<?php

class P26_Same
{
    public function main(): void
    {
        // Write your code here
       echo "Enter the first string: ";
    $string1 = trim(fgets($GLOBALS['STDIN'] ?? STDIN));         
    echo "Enter the second string: ";
    $string2 = trim(fgets($GLOBALS['STDIN'] ?? STDIN)); 
     
    $same = strcmp($string1, $string2);
    if ($same == 0) {
        echo "Same\n";
    } else {
        echo "Different\n"; 
    }
}
}