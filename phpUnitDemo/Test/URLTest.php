<?php

namespace phpUnitDemo\Test;

use phpUnitDemo\URL;

/**
* class URLTest
*/
class URLTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * This string will be sluggified” will turn into “this-string-will-be-sluggified
	 * @return [type] [description]
	 */
	public function testSluggifyReturnsSluggifiedString()
	{
		$originalString = "This string will be sluggified";
		$expectedResult = "this-string-will-be-sluggified";

		$url = new URL();

		$result = $url->sluggify($originalString);

		$this->assertEquals($result, $expectedResult);
	}
}