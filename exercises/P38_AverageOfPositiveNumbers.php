<?php

class P38_AverageOfPositiveNumbers
{
    public function main(): void
    {
        // Write your program here
       $num = null;
        $avg = 0;
        $count = 0;
        $p = 0;

        while(true){
            
           $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if($num == 0){
                
                if($count == 0){
                    echo "Cannot calculate the average";
                }else{
                    $avg = $p / $count;
                    echo $avg;
                }

                break;

            }elseif($num > 0){

                $count++;
                $p += $num;

            }
        }
    }
}
