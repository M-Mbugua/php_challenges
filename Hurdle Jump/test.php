class HurdleJumpTests extends TestCase
{
	public function tests()
	{
		$this->assertEquals(true, (hurdleJump([1, 2, 3, 4, 5], 5)));
		$this->assertEquals(false, (hurdleJump([5, 5, 3, 4, 5], 3)));
		$this->assertEquals(true, (hurdleJump([5, 4, 5, 6], 10)));
		$this->assertEquals(false, (hurdleJump([1, 2, 1], 1)));
		$this->assertEquals(true, (hurdleJump([3, 3, 3], 4)));
		$this->assertEquals(false, (hurdleJump([4, 4], 3)));
		$this->assertEquals(true, (hurdleJump([], 4))); 
	}
}
