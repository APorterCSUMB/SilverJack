<?php
    $values = 13;
    $suits = 4;
    $players = ["p0"=> array(),"p1"=> array(),"p2"=> array(),"p3"=> array()];
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
            //if player can draw card
            //if()
            array_push($players["p".$i], pop());
        }
    }
    
    $deck = makeDeck();
    shuffleDeck();
    deal();
    var_dump($players);
?>