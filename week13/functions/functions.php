 <?php 
function isPass($percentage){
if($percentage >=40){
return true;
}
else {
return false;
}
}

function testStudent($row){
$valid=true;
if($row['fullName']=='')
$valid =false;
if ($row['email']=='')
$valid=false;
if($row['address']=='')
$valid=false;
return $valid;
}


?>