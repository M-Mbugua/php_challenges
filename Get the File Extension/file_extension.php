<?php
function getExtension($arr) {
	foreach ($arr as $string) {
		$extension[] = pathinfo($string, PATHINFO_EXTENSION);
	}
	return $extension;
}
?>