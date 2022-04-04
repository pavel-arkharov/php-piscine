#!/usr/bin/php
<?php
	$words = explode (" ", $argv[1]);
	foreach ($words as $i => $word)
	{
		if ($word == "")
			unset($words[$i]);
	}
	echo (implode(" ", $words));
	?>