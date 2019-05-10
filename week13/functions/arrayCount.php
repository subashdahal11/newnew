<?php
function arrayCount($array,$element){
	$count=0;
	foreach ($array as $value) {
	if($value ==$element){
		$count++;
	}
}
return $count;
}