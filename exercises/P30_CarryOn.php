<?php

class P30_CarryOn
{
    public function main(): void
    {
        // Write your code here
       $endd = "";
       
       while($endd != "no"){
        echo "Shall we carry on?";
        $endd = (String) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
       }

    }
}
