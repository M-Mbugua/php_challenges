<?php
class StringFunc extends TestCase {
	public function testFunc() {
		$f1 = redundant("apple");
		$f2 = redundant("pear");
		$f3 = redundant("");

		$this->assertEquals($f1(), "apple");
		$this->assertEquals($f2(), "pear");
		$this->assertEquals($f3(), "");
	}
}
?>