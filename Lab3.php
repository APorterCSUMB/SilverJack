<?php
    $values = 13;
    $suits = 4;
    $deck = array();
    //populate card array
    for($i=0;$i<$values;$i++){
        for($j=0;$j<$suits;$j++){
            $deck[$i*$j + $j] = array("value"=>$i,"suit"=>$j);
        }
    }
    
    //shuffle
    shuffle($deck);
    
    //deal
    for($i=0;$i<$values;$i++){
        for($j=0;$j<$suits;$j++){
            $deck[$i*$j + $j] = array("value"=>$i,"suit"=>$j);
        }
    }
    
    
    print_r($deck);
    echo "<br>";
    shuffle($deck);
    print_r($deck);
?>