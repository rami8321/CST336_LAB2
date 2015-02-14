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
       $my_array = array();
       
        
        while(count($my_array) < 5)
            {
            $i = rand(1,13);
            $my_array[] = $i;
            $my_array = array_unique($my_array);

        }


        foreach ($my_array as $item) {
	        echo"<img src ='img/cards/". generateRandomSuits()."/$item.png'>"; 
        }

        echo "<span style = 'font-size: 6em;'>&nbsp;".array_sum($my_array) ."</span>";
        echo "<br/>";
        global $total;
        $total[] = array_sum($my_array);
        
    }


    
?>