<?php
class GetExtensions extends TestCase
{
	public function tests()
	{
		$this->assertSame(['jpg', 'pdf', 'mp3'], getExtension(['project1.jpg', 'project1.pdf', 'project1.mp3']));
		$this->assertSame(['rb', 'cpp', 'py', 'js'], getExtension(['ruby.rb', 'cplusplus.cpp', 'python.py', 'javascript.js']));
		$this->assertSame(['html', 'css'], getExtension(['code.html', 'code.css']));
		$this->assertSame(['java', 'java', 'java'], getExtension(['minesweeper.java', 'game.java', 'my_project.java']));
	}
}
?>
