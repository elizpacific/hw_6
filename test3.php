<?php
define("Start",0);
define("End",99999);
$ArrayPrime = array_combine(range(Start,End),range(1,100000));

/**!!!method from task 2!!!*/

/**
 * @param $Number
 *
 * @return int
 */
$startTimeM = new DateTime('now');
function Is_Prime($Number){
    for($i=2; $i<$Number; $i++) {
        if($Number %$i ==0) {
            return 0;
        }
    }
    return 1;
}

$Check = 0;
$Number = 0;
foreach ($ArrayPrime as $value) {
    if(Is_Prime($value)){
        $Check++;
    }
}
$endTimeM = new DateTime('now');
$interval = $startTimeM->diff($endTimeM);

print_r("Number of primes(my method):$Check\n");
echo 'Run time:';
echo $interval->format('%f ms');

/**!!!Sieve of Eratosthenes!!!*/

$startTimeE = new DateTime('now');

/**
 * @param $Number
 *
 * @return array
 */
function Array_Eratosthenes($Number){
    $SieveArray = [];
    for($i = 1; $i <= $Number; $i++) {
        $SieveArray[$i] = $i;
    }
    $i =2;
    while($i*$i <= $Number) {
        if(isset($SieveArray[$i])) {
            $k = $i;
            while ($k * $i <= $Number) {
                unset($SieveArray[$k * $i]);
                $k++;
            }
        }
        $i++;
    }
    return $SieveArray;
}
$endTimeE = new DateTime('now');
$intervalE = $startTimeE->diff($endTimeE);

$NumberArrayE = count(Array_Eratosthenes(100000));

print_r("\n\nNumber of primes(Sieve of Eratosthenes):$NumberArrayE");
echo PHP_EOL,'Run time:';
echo $intervalE->format('%f ms');
