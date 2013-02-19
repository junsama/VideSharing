<?php

/***************************
パスなどの定義ファイル
created 2013/02/19
author junko_kosen
***************************/

class Config{

  //Smarty関連
  const SMARTY_TEMPLATES  = '/usr/share/nginx/www/VideoSharing/App/Templates/';
  const SMARTY_TEMPLATES_C  = '/usr/share/nginx/www/VideoSharing/App/Templates_c/';
  const SMARTY_CACHE  = '/usr/share/nginx/www/VideoSharing/App/Cache/';

  // データーベース接続情報
  const DB_HOST     = 'localhost';
  const DB_USERNAME = 'junsama';
  const DB_PASSWD   = 'ekrD2MA7';
  const DB_DBNAME   = 'junsama_db';
}

?>
