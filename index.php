<?php

function recur($number){
       
    if($number == 0){
        return 1;
    }
    else{
        return($number * recur($number - 1));
    }

}
echo recur(0) . "<br>";
echo recur(7) . "<br>";
echo recur(8);

?>
