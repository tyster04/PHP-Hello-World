<?php
    // comment
    /*
        multiline commment
    */

    $a = 20;
    $b = 20;

    $r = $a + $b;
    echo "A + B = " . $r;
    echo "<br>";

    if($a > $b){
        echo $a . " > " . $b;
    }
    elseif($a == $b){
        echo $a . " = " . $b;
    }
    else{
        echo $a . " < " . $b;
    }
    echo "<br>";

    $index_array = ['a', 'b', 'c', 1234];

    //echo $index_array[3];

    $associative_array = ["pencils" => 4, "pens" => 10, "erasers" => 2];
?>