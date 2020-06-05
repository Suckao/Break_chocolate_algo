<?php

function breakChocolate($n, $m) {
    $i = 0;
    while ($n < $m){
        if ($m > $n){
            $i ++;
            $m -= $n;
        }
    }
    return $i;
}
 echo breakChocolate(1, 3)
 ?>
