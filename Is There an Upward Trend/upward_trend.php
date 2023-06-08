<?php
function upwardTrend($arr) {
	for ($i = 0; $i < count($arr)-1; $i++) {
		if(!is_int($arr[$i]))
			return "Strings not permitted!";
		if ($arr[$i] > $arr[$i+1]) 
			return false;
	}
	return true;
}
?>
