#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$words = explode(' ', $str);
		sort($words);
		return $words;
	}
	?>