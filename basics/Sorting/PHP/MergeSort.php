<?php
/*
 * Basic example of Merge Sort
 * Divide-and-conquer alrorithm
 * Complexity: O (n log n)
 */

function mergeSort($dataset){

	if(count($dataset) == 1 ) {
		return $dataset;
	}

	$middle = count($dataset) / 2;

    $leftset  = array_slice($dataset, 0, $middle);
    $rightset = array_slice($dataset, $middle);

	$leftset  = mergeSort($leftset);
	$rightset = mergeSort($rightset);

	$result = array();

	while (count($leftset) > 0 && count($rightset) > 0){
		if($leftset[0] > $rightset[0]){
			$result[] = $rightset[0];
			$rightset = array_slice($rightset , 1);
		}else{
			$result[] = $leftset[0];
			$leftset = array_slice($leftset, 1);
		}
	}

	while (count($leftset) > 0){
		$result[] = $leftset[0];
		$leftset = array_slice($leftset, 1);
	}

	while (count($rightset) > 0){
		$result[] = $rightset[0];
		$rightset = array_slice($rightset, 1);
	}

	return $result;
}


$array = [23, 8, 15, 17, 4, 40, 11, 31, 55, 3, 1, 100,99];
$result = mergeSort($array);

echo "Original: " . json_encode($array) . "\n";
echo "Result:   " . json_encode($result) . "\n";