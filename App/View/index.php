<?php

/***************************
アプリケーション開始ファイル
created 2013/02/19
author junko_kosen
***************************/

require_once('Lib/Template.php');

$template_file = 'index.tpl';

$template = new Template();
$template->display($template_file);

?>
