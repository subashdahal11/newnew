<?php
$student = new DatabaseTable('tbl_student');
$title = 'Manage a Student';

if(isset($_POST['save'])){
	$valid=testStudent($_POST['student']);
	if($valid){
		$student->save($_POST['student'], 'id');
	header('Location:studentlist');
}
else{
	echo '<h3> Please enter valild input .</h3> ';
}
}
else{
	if(isset($_GET['id'])){
		$student = $student->find('id', $_GET['id']);
		$sData = $student->fetch();
	}
	else{
		$sData = [];
	}
}
$content = loadTemplate('../templates/student_template.php', ['student'=>$sData]);