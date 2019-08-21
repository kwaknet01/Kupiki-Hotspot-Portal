<?php
	$command = escapeshellcmd('sudo /usr/bin/python /usr/share/nginx/portal/MFRC522-python/main.py');
	$output = shell_exec($command);
 	echo "$output";
?>

