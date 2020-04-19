<?php

#creating an array
$array1 = array();
$array2 = [];
$array3 = array('apple','orange','pineapple');

#delete last item - array_pop()
$a=array("red","green","blue");
array_pop($a);
print_r($a);

/*
Array
(
    [0] => red
    [1] => green
)
*/

#insert item at the end
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

/*
Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
)
*/

#delete by key

unset($array3[0]);
print_r($array3);

/*
Array
(
    [1] => orange
    [2] => pineapple
)
*/