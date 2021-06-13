<?php

function reverse($x) {
	 // echo $x;
        $len = strlen($x);
         // echo $len;
        $temp = '';
        for($i=$len-1;$i>=0;$i--)
        {
        	 // echo $x[$i];
        	// die("sss");
            $temp .= $x[$i];
        }
        echo $temp;
    }

    $x = "123";
    reverse($x);
?>