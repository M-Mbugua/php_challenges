function secret($text) {
	$exploded = explode("*",$text);
	$result = "<$exploded[0]></$exploded[0]>";
	return str_repeat($result,$exploded[1]);
}
