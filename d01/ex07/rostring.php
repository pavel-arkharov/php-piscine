#!/usr/bin/php
<?php
	$words = explode (" ", trim($argv[1]));
	$words = array_filter($words, 'strlen');
	foreach ($words as $i => $word)
	{
		if ($i > 0)
			echo $word . " ";
	}
	echo $words[0] . "\n";
	?>