<?php
class Secret extends TestCase
{
	public function tests()
	{
    $this->assertEquals(secret("div*2"), "<div></div><div></div>");
    $this->assertEquals(secret("p*1"), "<p></p>");
    $this->assertEquals(secret("li*3"), "<li></li><li></li><li></li>");
    $this->assertEquals(secret("h1*4"), "<h1></h1><h1></h1><h1></h1><h1></h1>");
    $this->assertEquals(secret("ul*2"), "<ul></ul><ul></ul>");
  }
}

// Author: BijogFc24
?>