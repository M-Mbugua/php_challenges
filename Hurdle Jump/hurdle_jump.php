function hurdleJump($hurdles, $jumpHeight) {
	foreach($hurdles as $hurdle)
	{
		return ($hurdle < $jumpHeight) ? true : false;
	}
	return true;
}
