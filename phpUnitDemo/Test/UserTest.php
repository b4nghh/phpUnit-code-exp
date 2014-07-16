<?php

namespace phpUnitDemo\Test;

use phpUnitDemo\User;

/**
* class UserTest
*/
class UserTest extends \PHPUnit_Framework_TestCase
{
	public function testSetPasswordReturnsTrueWhenPasswordSuccessfullySet()
	{
		$details = array();
		$user = new User($details);

		$password = 'chiefree';

		$result = $user->setPassword($password);

		$this->assertTrue($result);
	}

	public function testGetUserReturnsUserWithExpectedValues()
	{
		$details = array();
		$user = new User($details);

		$password = 'chiefree';
		$user->setPassword($password);

		$expectedPasswordResult = '08210709c3aea79367821f3c84b759f6';

		$currentUser = $user->getUser();

		$this->assertEquals($currentUser['password'], $expectedPasswordResult);
	}
}