<?php
	$command = passthru('sudo python /home/pi/MFRC522-python/main.py');
        // or
	// $command = escapeshellcmd('/home/pi/MFRC522-python/main.py');
        // But you have to make your script executable doing: chmod +x myscript.py
        var_dump($command);
	printr($command);
	$output = exec($command);
	echo $output;

	$command = escapeshellcmd('sudo python /home/pi/MFRC522-python/main.py');
	$output = shell_exec($command);
	echo $output;

?>

