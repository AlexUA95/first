<?php

function pif_line($x) {
	array_map(
		function ($z) use($x){
			$s = strval($x * $z);
			$len = strlen($s);
			print str_repeat(" ", 4 - $len) . $s;
		},
		range(1, 10)
	);
	print "\n";
}

array_map('pif_line', range(1, 10));