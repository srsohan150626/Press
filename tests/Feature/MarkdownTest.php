<?php 

namespace Press\Tests;

use Orchestra\Testbench\TestCase;
use Press\MarkdownParser;

class MarkdownTest extends TestCase
{
	 /** @test */
	public function experiment()
	{
		$this->assertEquals('<h1>Heading</h1>', MarkdownParser::parse('# Heading'));
		
	}
}