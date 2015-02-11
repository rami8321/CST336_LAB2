<?php

    function generateRandomSuits(){
        
            $suit = rand(1,4);

            switch($suit){
                case 1: $folder="clubs";
                    break;
                case 2: $folder="diamonds";
                    break;
                case 3: $folder="hearts";
                    break;
                case 4: $folder="spades";
                    break;
            }
               
            return $folder;
        
        
    }

    function generateRandomNumer(){
        $num1 = rand(1,13);
            echo "<img src ='img/cards/". generateRandomSuits()."/$num1.png'>";
        $num2 = rand(1,13);
            echo "<img src ='img/cards/". generateRandomSuits()."/$num2.png'>";
        $num3 = rand(1,13);
            echo "<img src ='img/cards/". generateRandomSuits()."/$num3.png'>";
        $num4 = rand(1,13);
            echo "<img src ='img/cards/". generateRandomSuits()."/$num4.png'>";
        $num5 = rand(1,13);
            echo "<img src ='img/cards/". generateRandomSuits()."/$num4.png'>";
        

        $sum = $num1 + $num2 + $num3 + $num4 + $num5 ;
        echo $sum;
        echo "<br/>";
        
    }

    
?>