<?php
require 'functions/functions.php';
class DemoTest extends \PHPUnit_Framework_TestCase{
	function testIsPassLessThan40(){
		$valid=isPass(23);
		$this->assertFalse($valid);
	}
	function testIsPassEqualsTo40(){
	$valid=isPass(40);
	$this->assertTrue($valid);	
	}
	function testIsPassGreaterThan40(){
	$valid=isPass(61);
	$this->assertTrue($valid);	
	}

}