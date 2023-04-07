<?php



$suits = array('Spades', 'Hearts', 'Clover','Diamonds');
$number = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Q", "J", "K");

function cards()
{
    foreach ($suits as $s_value) 
    {
        foreach ($number as $n_value) 
        {
            echo $s_value.$n_value."\n";
        }
        
    }
}

echo cards();