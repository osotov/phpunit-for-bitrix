<?php
// Set 1C-Bitrix constants to prevent "agent", permissions and auth checking
// Include 1C-Bitrix framework core
define('NOT_CHECK_PERMISSIONS', true);
define('NO_AGENT_CHECK', true);
$GLOBALS['DBType'] = 'mysql';
$_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/../../..');
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$_SESSION['SESS_AUTH']['USER_ID'] = 1;
