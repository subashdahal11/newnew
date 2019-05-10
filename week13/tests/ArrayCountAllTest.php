<?php
require 'functions/arrayCountAll.php';
class ArrayCountAllTest extends \PHPUnit_Framework_TestCase{
	function testArrayCountAllTest1(){
		$inputArray = ['A','B' ,'A','C','A','C'];
		$expectedOutputArray = ['A' => 3,'B' => 1,'C' => 2];
		$actualOutputArray = arrayCountAll($inputArray);
		$this->assertEquals($expectedOutputArray, $actualOutputArray);
	}
	function testArrayCountAllTest2(){
		$inputArray = ['A','B','C'];
		$expectedOutputArray = ['A' => 1,'B' => 1,'C' => 1];
		$actualOutputArray = arrayCountAll($inputArray);
		$this->assertEquals($expectedOutputArray, $actualOutputArray);
	}
	function testArrayCountAllTest3(){
		$inputArray = ['A'];
		$expectedOutputArray = ['A' => 1];
		$actualOutputArray = arrayCountAll($inputArray);
		$this->assertEquals($expectedOutputArray, $actualOutputArray);
	}
	function testArrayCountAllTest4(){
		$inputArray = [];
		$expectedOutputArray = [];
		$actualOutputArray = arrayCountAll($inputArray);
		$this->assertEquals($expectedOutputArray, $actualOutputArray);
	}



}