<?php
class upwardtrend extends TestCase {
	public function testTests() {
		$this->assertEquals(true, upwardTrend([1, 2, 3, 4, 5, 6]));
		$this->assertEquals(false, upwardTrend([1, 3, 2, 5, 6, 7]));
		$this->assertEquals("Strings not permitted!", upwardTrend([1, 2, 3, 4, 5, '6', 7, 8, 9]));
		$this->assertEquals(true, upwardTrend([1, 3, 5, 7, 9]));
		$this->assertEquals(true, upwardTrend([10, 12, 13, 15, 20]));
		$this->assertEquals(false, upwardTrend([6, 9, 11, 15, 12]));
	}
}
?>