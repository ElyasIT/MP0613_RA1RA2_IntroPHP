<?php

class P16_SpeedingTicket {
    public function main(): void {
        // Define the speed
        $speed = 121;

        // Check if the speed exceeds the limit
        // Write your code here
        $speedLimit = 120;
        if ($speed > $speedLimit) {
            echo "Speeding ticket!\n";
        } 
    }
}
