<?php

function countdown($x) {
	if ($x == 0) {
		print "\nDone\n";
		return true;
	}else {
		print "$x ...\n";
		countdown($x-1);

	}
}

countdown(10);