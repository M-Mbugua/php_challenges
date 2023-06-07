<?php
function correctStream($user, $correct) {
	return array_map(function($x, $y) {
		return $x==$y ? 1 : -1;
	}, $user, $correct);
}
?>