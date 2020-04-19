<?php

function gcd($a, $b) {
	while($b != 0){
		$t = $a;
		$a = $b;
		$b = $t % $b;
	}

	return $a;
}

print(gcd(60, 96)); #should print 12
print "\n";
print(gcd(20, 8)); #should print 4
print "\n";