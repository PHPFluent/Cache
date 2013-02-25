<?php
namespace Cache;

require_once '../vendor/autoload.php';

use \PHPFluent\Cache\Cache;

class CacheTest extends \PHPUnit_Framework_TestCase
{
	public function testShouldReturnFooKey()
	{
		$mock = $this->getMockBuilder("Doctrine\Common\Cache\Cache")
					 ->disableOriginalConstructor()
					 ->getMock();
		$mock->expects($this->any())
			 ->method('contains')
			 ->will($this->returnValue(true));
		$mock->expects($this->once())
			 ->method('fetch')
			 ->with('foo')
			 ->will($this->returnValue('bar'));
		$mock->expects($this->any())
			 ->method('save')
			 ->will($this->returnValue(true));
		$mock->expects($this->any())
			 ->method('delete')
			 ->will($this->returnValue(true));

		$cache = new Cache($mock);
		$this->assertTrue(isset($cache['foo']));
		$this->assertEquals('bar', $cache['foo']);
		$cache['foo'] = 'bar';
		unset($cache['foo']);
	}

	public function testShouldReturnBazKey()
	{
		$mock = $this->getMockBuilder("Doctrine\Common\Cache\Cache")
					 ->disableOriginalConstructor()
					 ->getMock();
		$mock->expects($this->any())
			 ->method('contains')
			 ->will($this->returnValue(true));
		$mock->expects($this->once())
			 ->method('fetch')
			 ->with('baz')
			 ->will($this->returnValue('weRock'));
		$mock->expects($this->any())
			 ->method('save')
			 ->will($this->returnValue(true));
		$mock->expects($this->any())
			 ->method('delete')
			 ->will($this->returnValue(true));
		$cache = new Cache($mock);
		$this->assertTrue(isset($cache['baz']));
		$this->assertEquals('weRock', $cache['baz']);
		$cache['baz'] = 'weRock';
		unset($cache['baz']);
	}
}