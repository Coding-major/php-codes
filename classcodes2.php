<?php

    
    function primeNumber($number1, $number2) {
        $Prime = [];
        for ($i=$number1; $i <= $number2; $i++) {
            // if ($i%2==0) {
            //     continue;
            // } elseif ($i%3==0) {
            //     continue;
            // } elseif ($i%5==0) {
            //     continue;

            if ($i%2==0 ||$i%3==0 ||$i%5==0) {
                if ($i==2||$i==3||$i==5) {
                    $index = count($Prime);
                    $Prime[$index] = $i;
                } else {
                    continue;
                }
            } else {
                $index = count($Prime);
                $Prime[$index] = $i;
                // $notPrime = [];
                // $index = count($notPrime) - 1;
                // $notPrime[$index] = $i; 
            }
        }

        $arrayLength = count($Prime) - 1;
        for ($j = 0; $j < $arrayLength; $j++) {
            echo $Prime[$j], " ";
        }
    }

    primeNumber(3,20);
?>

/////////////////////////////////

<?php
?>