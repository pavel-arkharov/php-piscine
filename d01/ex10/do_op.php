#!/usr/bin/php
<?php 
	if (count($argv) != 4)
	{
		echo 'Incorrect parameters' . "\n";
		return;
	}
	switch (trim($argv[2])) {
		case "-":
			{
				echo (intval(trim($argv[1])) - trim($argv[3])) . "\n";
				break;
			}
		case "+":
			{
				echo (intval(trim($argv[1])) + trim($argv[3])) . "\n";
				break;
			}
		case "*":
			{
				echo (intval(trim($argv[1])) * trim($argv[3])) . "\n";
				break;
			}
		case "/":
			{
				echo (intval(trim($argv[1])) / trim($argv[3])) . "\n";
				break;
			}
		case "%":
			{
				echo (intval(trim($argv[1])) % trim($argv[3])) . "\n";
				break;
			}
	}
?>