<?php

function find_dupliactes_in_array($inputArray){
    $duplicateArray = array();
    foreach(array_count_values($inputArray) as $value => $count)
    if($count > 1) $duplicateArray[] = $value;
    
    return $duplicateArray;
}

$inputArray = [1,1,3,5,3,7,9,0,1,9];
$getDuplicates = find_dupliactes_in_array($inputArray);

echo("////////// Output ///////\nDuplicates: ");
echo json_encode($getDuplicates);

?>