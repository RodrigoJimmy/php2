<?php
// URLS.PHP

$context = stream_context_create(
	array( 'ftp' => array('overwrite' => true )
	)
);

$fp = fopen('ftp://usuario:senha@ftp.php.net/asdf.txt',
 'wb', false, $context);

