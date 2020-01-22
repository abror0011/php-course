<?php
    //keyword function_name (param1,param2, param3)
    // function getNowDate() {
        
    //     return date('d.m.Y'); 
    // }
    //   echo getNowDate();
    //Get time
    // function getNowTime() {
        
    //     return date('h:i:s'); 
    // }

    //  echo getNowTime();

    // function add($a, $b) {
    //     return $a+$b;
    // }
    // function add($a, $b) {
    //     echo $a+$b;
    // }

    // echo add(5, 10);
    // add(5, 10);
    
    function abror($a, $b){
         echo $a." ".$b;
    }
    //abror('Abror','Orinov');
    //abror('Abror','Orinov');

    /**
     * Anonim function
     */
    $myFunc = function($a, $b) {
         return $a+$b;
    };

    echo $myFunc(5, 55);
?>
    