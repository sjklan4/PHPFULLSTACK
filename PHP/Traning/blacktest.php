<?php

$suits = array('Spades', 'Hearts', 'Clover','Diamonds');
$number = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Q", "J", "K");

for($i=1; $i<=52; $i++)
{
    foreach ($suits as $s_value) {
        foreach ($number as $n_value) {
            echo $s_value.$n_value."\n";
        }
        
    }
}


// $suits = array(1,2,3,4,5,6);
// $number = array("A","B","C");

// foreach ($suits as $val) {
//     foreach ($number as $value) {
//         echo $val.$value."\n";
//     }
// }