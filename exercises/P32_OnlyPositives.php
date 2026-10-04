<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        // Write your code here
       $num =  null;

        while(true){
            echo "Give a number:";
            $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($num < 0){
                echo "Unsuitable number";
            }else if($num > 0){
                $opp = $num ** 2;
                echo $opp;
            } else{
                break;
            }
        }
    }
}
