<?php

$dirname = reset(explode('Upload',dirname(__FILE__)));
echo $dirname;
set_include_path(get_include_path() . PATH_SEPARATOR . $dirname);
require '../App/View/upload.php';

?>
