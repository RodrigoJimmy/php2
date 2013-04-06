<?php
require_once "vendor/autoload.php";

$smarty = new Smarty();

$smarty->assign('nome', 'Rodrigo de Lima Vieira');
$smarty->display('index.tpl');
