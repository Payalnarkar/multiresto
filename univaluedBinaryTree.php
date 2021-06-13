<?php

function isUnivalTree($root) {
        $len = count($root);
        
        for($i=0;$i<$len;$i++)
        {
            for($j=$i+1;$j<$len;$j++)
            {
                if($root[$i]==$root[$j] || $root[$i]== null)
                {

                    return true;
                }
                else
                {
                    die("sssss");
                    return false;
                }
            }
        }
        
    }

   $root = [1,1,1,1,1,null,1];
   
   isUnivalTree($root); 

?>