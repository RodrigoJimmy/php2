<?php
require_once "vendor/autoload.php";

$smarty = new Smarty();

// preenche variáveis do template
$smarty->assign('nome', 'Rodrigo de Lima Vieira');

$users = array('rodrigo', 'joao', 'pedro');

$smarty->assign('users', $users);
// exibe o template
$smarty->display('index.tpl');
