<?php

namespace phpUnitDemo\Test;

/**
* class FirstTest
*/
class FirstTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * testTrueIsTrue method
	 */
	public function testTrueIsTrue()
	{
		$foo = true;
		$this->assertTrue($foo);
	}

	/**
	 * testFalseIsFalse method
	 */
	public function testFalseIsFalse()
	{
		$foo = false;
		$this->assertFalse($foo);
	}
}