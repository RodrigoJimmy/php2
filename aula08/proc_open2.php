<?php
$descs = array( 
	0 => array('pipe', 'r'),
	1 => array('pipe', 'w')
);

$res = proc_open("ls", $descs, $pipes);

if (is_resource($res)) {

fputs($pipes[0], '/');

fclose($pipes[0]); // faz o proc_open n esperar por mais entrada

while (!feof($pipes[1])) {
	$line = fgets($pipes[1]);
    echo $line . "<br>";
}

proc_close($res);
}
?>