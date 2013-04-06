<?php

$fp = fopen("/etc/services", "r");

if (!$fp) {
	die("Falha ao abrir arquivo");
}

echo "<pre>";
// fread ($fp, 4096);
while ($line = fgets($fp))
{
	echo $line;
}

fclose($fp);
