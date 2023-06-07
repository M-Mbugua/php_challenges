<?php
function redundant($s) {
	return function() use ($s) {
    return $s;
	};
}
?>