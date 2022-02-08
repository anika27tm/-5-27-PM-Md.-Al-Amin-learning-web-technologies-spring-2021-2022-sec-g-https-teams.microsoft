<?php

    $target=100;
    $even= "Even Numbers Are : ";
    $odd="<br />& Odd Numbers Are : ";

    for($i=1;$i<=$target;$i++)
    {
        if($i%2==0)
        {
            $even.=$i.",";
        }
        
        else $odd.=$i.","; 
    }   
    echo $even.$odd;

?>