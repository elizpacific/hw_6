<?php
//    define("Const",5);
const Const1 = 5;
    $WhileCheck = 0;
    $Count = 0;
    while ($WhileCheck <= 100){
        if($WhileCheck % Const1 == 0){
            $Count ++;
        }
        $WhileCheck ++;
    }
    print_r($Count);
