
<?php
/*This class contains a function that sets an array of
 * 4 suits, 13 faces and return a deck of 52 cards with var_dump
 */
Class Deck {
    public $suits = array ('Spades', 'Hearts', 'Clubs', 'Diamonds');
    public $faces = array("A", 2, 3, 4, 5, 6, 7, 8, 9, 10, "J", "Q", "K");
    public $deck = array();
    public $card;
    public $value=0;


    public function __construct() { 

        //This function will build a simple 52 card deck for me
        foreach($this->suits as $suit) { 
            foreach($this->faces as $face) { 
                //I introduce a local variable $value to hold a score Number of a card

                $value = $face;

                if(!is_numeric($face))  {
                    $value = 10; 
                }

                if($face == 'A') {
                    $value = 11; 
                }

                $this->deck[] = array("suit" => $suit, "face" => $face, "value" => $value); 
            } 
        }// end of a loop in loop

        return $this->randomCard();
    }

    public function randomCard() { 
        shuffle($this->deck);
        $card = array_shift($this->deck);
        //var_dump $this->card;
        return $this->card['face'];
        echo ($this->card['face']);
    }

}//end of the class

$obj = new Deck;
var_dump ($obj->suits);
echo '<br>';
print_r ($obj->faces);
echo '<br>';
echo '<br>';
print_r ($obj->deck);
echo '<br>';
echo '<br>';
echo 'Test test';
print_r ($obj->card);



$arr = array("array_shift", "unshift", "array_unshift");


echo  array_shift($arr, "shift");


echo 'test';
echo 'test';
echo 'test';
echo 'test';
echo 'test';
echo 'test';

?>

