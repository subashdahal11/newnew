<?php
function arrayCountAll($array) {
    $result = [];
    foreach ($array as $value) {
        if (isset($result[$value])) {
            $result[$value] = ++$result[$value];
        }
        else {
             $result[$value] = 1;   
        }
    }
    return $result;
} 
