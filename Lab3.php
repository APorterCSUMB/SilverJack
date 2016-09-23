<?php
    $values = 13;
    $suits = 4;
    $players = ["p0"=> array("name"=>"1","win"=>"loser","hand"=>array()),
                "p1"=> array("name"=>"2","win"=>"loser","hand"=>array()),
                "p2"=> array("name"=>"3","win"=>"loser","hand"=>array()),
                "p3"=> array("name"=>"4","win"=>"loser","hand"=>array())];
    $deck = array();
    $curCard = 0;
    
    function makeDeck(){
        global $values,$suits;
        $deck = array();
        //populate card array
        for($i=0;$i<$values;$i++){
            for($j=0;$j<$suits;$j++){
                $deck[$i*$j + $j] = array("value"=>$i,"suit"=>$j);
            }
        }
        
        return $deck;
    }
    function pop(){
        global $deck,$curCard;
        $temp = $deck[$curCard];
        $curCard++;
        return $temp;
    }
    
    function shuffleDeck(){
        global $deck,$curCard;
        shuffle($deck);
        $curCard=0;
    }
    
    function deal(){
        global $deck, $players;
        for($i=0;$i<count($players);$i++){
            $draw = rand(4,6);
            for($j=0;$j<$draw;$j++){
                array_push($players["p".$i]['hand'], pop());
            }
        }
    }
    
    function playerEval(){
        global $players;
        $best = 0;
        for($i=0;$i<count($players);$i++){
            $tot = 0;
            for($j=0;$j<count($players["p".$i]['hand']);$j++){
                $tot = $players["p".$i]['hand'][$j]['value'];
            }
            
        }
    }
    
    $deck = makeDeck();
    shuffleDeck();
    deal();
    shuffle($players);
    
    for($i=0;$i<count($players);$i++){
        echo '
        <div class="playerblock">
        <div class="portrait"> </div>';
        echo "<br>";
    }
    //var_dump($players);
    
    
?>