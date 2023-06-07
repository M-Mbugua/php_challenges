<?php
class IncludesWhitespaces extends TestCase
{
	public function tests()
	{
		$this->assertEquals(hasSpaces("Foo"), false);
		$this->assertEquals(hasSpaces("Foo bar"), true);
		$this->assertEquals(hasSpaces("Foo "), true);
		$this->assertEquals(hasSpaces(" Foo"), true);
		$this->assertEquals(hasSpaces(" "), true);
		$this->assertEquals(hasSpaces(""), false);
		$this->assertEquals(hasSpaces(",./;'[]-="), false);
	}
}
?>
