<?php

/***************************
動画投稿ページコントローラー
created 2013/02/19
author junko_kosen
***************************/

class uploadController{

  function __construct(){
    if (isset($_FILES["upfile"]["tmp_name"])){
      if(is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "../htdocs/Video/" . $_FILES["upfile"]["name"])) {
          chmod("../htdocs/Video/" . $_FILES["upfile"]["name"], 0644);
          echo $_FILES["upfile"]["name"] . "をアップロードしました。";
        } else {
          echo "ファイルをアップロードできません。";
        }
      } else {
        echo "ファイルが選択されていません。";
      }
    }else{
      echo "ファイルが選択されていません。";
    }
  }

}
