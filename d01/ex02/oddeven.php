#!/usr/bin/php
<?php
	$fd = fopen('php://stdin', 'r') or die($php_errormsg);
	echo 'Enter a number: ';
	$num = trim(fread($fd,1024));
	if (is_numeric($num))
	{
		if ($num % 2 == 0)
			echo 'The number '. $num . ' is even';
		else if ($num % 2 != 0)
			echo 'The number '. $num . ' is odd';
	} 
	else 
		echo "'" . $num . "'" . ' is not a number';
	?>