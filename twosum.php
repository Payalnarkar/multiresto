<?php
// Given nums = [2, 7, 11, 15], target = 9,

// Because nums[0] + nums[1] = 2 + 7 = 9,
// return [0, 1].
$nums = array(2, 7, 11, 15);;
$target = 9;
$temp='';

for ($i=0; $i < count($nums); $i++) { 
	for ($j=$i+1; $j < count($nums); $j++) { 
		if ($nums[$i]+$nums[$j] == 9) {
			// die("sss");
						$temp .= $i." ".$j;
						echo $i." ".$j;
		}
	}
	return $temp;
}

?>