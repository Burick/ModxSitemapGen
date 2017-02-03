<?php
require_once(dirname(__FILE__).'/common.inc.php');  

$index =  $_SERVER[DOCUMENT_ROOT].'/index.php';
                                        
// Подключаем
define('MODX_API_MODE', true);
//require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/index.php';
require_once $index;
// Включаем обработку ошибок
$modx->getService('error','error.modError');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget(XPDO_CLI_MODE ? 'ECHO' : 'HTML');


  

          
     


exit;
