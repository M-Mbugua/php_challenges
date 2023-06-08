<?php
function removeVowels($str) {
  $vowels = array("a", "e", "i", "o", "u");
	return str_ireplace($vowels, "", $str);
}
?>