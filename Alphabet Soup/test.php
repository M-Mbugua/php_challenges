<?php
class AlphabetSoup extends TestCase {
  public function test() {
    $this->assertEquals("ehllo", AlphabetSoup("hello"));
    $this->assertEquals("abdeit", AlphabetSoup("edabit"));
    $this->assertEquals("acehkr", AlphabetSoup("hacker"));
    $this->assertEquals("eegk", AlphabetSoup("geek"));
    $this->assertEquals("aacijprstv", AlphabetSoup("javascript"));
    $this->assertEquals("bcdeiiilrty", AlphabetSoup("credibility"));
    $this->assertEquals("aehoopprst", AlphabetSoup("apostrophe"));
    $this->assertEquals("adeeiimnnortt", AlphabetSoup("determination"));
    $this->assertEquals("inw", AlphabetSoup("win"));
    $this->assertEquals("ehinsssty", AlphabetSoup("synthesis"));
  }
}
?>
