#!/usr/bin/php
<?PHP
	$months = array("janvier" => "january", "fevrier" => "february", "mars" => "march", "avril" => "april", "mai" => "may", "juin" => "june", "juillet" => "july", "aout" => "august", "septembre" => "september", "octobre" => "october", "novembre" => "november", "decembre" => "december");
	$days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
	date_default_timezone_set("Europe/Paris");

	$date_str = explode(' ', $argv[1]);
	if (count($date_str) != 5)
		exit("Wrong format\n");
	if (array_search(strtolower($date_str[0]), $days) == FALSE)
		exit("Wrong format\n");
	$mon = strtolower($date_str[2]);
	$new_str = $date_str[1] . " " . $months[$mon] . " " . $date_str[3] . " " . $date_str[4];
	if (!strtotime($new_str))
		exit("Wrong format\n");
	echo strtotime($new_str);
	//print_r($date_str);
?>