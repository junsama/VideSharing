<?php

/***************************
メインページコントローラー
created 2013/02/19
author junko_kosen
***************************/

require_once('Lib/Template.php');
require_once('Lib/DB.php');

class mainController{

  //DB接続関連
  private $con;
  private $db;

  function __construct(){
    echo $_GET["keyword"];
  }

?>
