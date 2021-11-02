<?php
define("Start",0);
define("End",99);

/**
 * @param $Number
 *
 * @return bool
 */
function Is_Prime($Number){
        for($i=2; $i<$Number; $i++) {
            if($Number %$i ==0) {
                return 0;
            }
        }
        return 1;
}

$ArrayPrime = array_combine(range(Start,End),range(1,100));
$Check = 0;
$Number = 0;
foreach ($ArrayPrime as $value) {
    if(Is_Prime($value)){
        $Check++;
    }
}
print_r("Number of primes:$Check");



