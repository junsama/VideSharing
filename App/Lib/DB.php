<?php

/***************************
DB接続クラス
created 2013/02/19
author junko_kosen
***************************/

require_once '../Config/Config.php';

class DB {
  private $db;

  function __construct() {
    $this->db = new mysqli(Config::DB_HOST, Config::DB_USERNAME, Config::DB_PASSWD, Config::DB_DBNAME);
    if (mysqli_connect_error()) {
      // TODO エラー処理
      echo 'DB ERROR';
      exit(1);
    }
  }

  function __destruct() {
    $this->db->close();
  }

  public function getDb() {
    return $this->db;
  }

?>
