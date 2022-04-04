#!/usr/bin/php
<?php
	$arr = array();
	print_r($argv);
	foreach($argv as $i => $arg)
	{
		if ($i > 0)
		{
			$arr2 = array_filter(explode(" ", $arg));
			foreach ($arr2 as $elem2)
				array_push($arr, $elem2);
		}
	}
	sort($arr);
	foreach ($arr as $elem)
		echo $elem . "\n";
	?>