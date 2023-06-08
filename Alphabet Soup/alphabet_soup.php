<?php
function AlphabetSoup($str) {
  $strarray = str_split($str);
	sort($strarray);
	return implode($strarray);
}
?>