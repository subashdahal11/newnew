 <?php

class StudentTest extends PHPUnit_Framework_TestCase
{
function testInvalidFullName(){
$row =[
'fullName'=>'',
'email'=>'abc@gmail.com',
'address'=>'Kathmandu'
];
$valid = testStudent($row);
$this->assertFalse($valid);
}

function testInvalidEmail(){
$row =[
'fullName'=>'Abc',
'email'=>'',
'address'=>'Kathmandu'
];
$valid = testStudent($row);
$this->assertFalse($valid);
}

function testInvalidAddress(){
$row =[
'fullName'=>'Abc',
'email'=>'abc@gmail.com',
'address'=>''
];
$valid = testStudent($row);
$this->assertFalse($valid);
}
function testValidStudent(){
$row =[
'fullName'=>'Abc',
'email'=>'abc@gmail.com',
'address'=>'Kathmandu'
];
$valid = testStudent($row);
$this->assertTrue($valid);
}

}