<?php

function DataBase($state="development"){
	$dbfile = fopen("database.json", "r") or die("Unable to open file!");
	$json = fread($dbfile,filesize("database.json"));

	$db = json_decode($json, true);

	fclose($dbfile);

	if (isset($db[$state]['charset'])) {
		return "mysql:host=".$db[$state]['host'].";dbname=".$db[$state]['dbname'].";charset=".$db[$state]['charset']."|".$db[$state]['user']."|".$db[$state]['password']."|";
	}else{
		return "mysql:host=".$db[$state]['host'].";dbname=".$db[$state]['dbname']."|".$db[$state]['user']."|".$db[$state]['password']."|";
	}
}

?>