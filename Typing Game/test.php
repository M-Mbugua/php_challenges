<?php
class TypingGame extends TestCase
{
	public function tests()
	{
		$this->assertSame([1, 1, -1], correctStream(['it', 'is', 'find'], ['it', 'is', 'fine']));
		$this->assertSame([1, -1, 1, 1, 1], correctStream(['april', 'showrs', 'bring', 'may', 'flowers'], ['april', 'showers', 'bring', 'may', 'flowers']));
		$this->assertSame([1, -1, 1], correctStream(['weird', 'indicr', 'moment'], ['weird', 'indict', 'moment']));
		$this->assertSame([1, 1, 1], correctStream(['starry', 'wind', 'skies'], ['starry', 'wind', 'skies']));
	}
}
?>