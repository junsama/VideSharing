<?php

// このスクリプトが有るディレクトリをinclude_pathに追加する
// このディレクトリからの相対パスで他のファイルを指定します
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__));
require 'App/View/index.php';

?>
