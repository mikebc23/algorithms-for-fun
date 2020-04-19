<?php

function power($num, $pwr) {
	if($pwr == 0) {
		return 1;
	}else {
		return $num * power($num, $pwr-1);
	}

}

function factorial($num) {
	if($num == 0) {
		return 1;
	}else {
		return $num * factorial($num - 1);
	}
}

$a = 5;
$b = 3;

print "$a to the power of $b is: " . power($a, $b) . "\n";

$a = 5;
print "The factorial of $a is: " . factorial($a) . "\n";