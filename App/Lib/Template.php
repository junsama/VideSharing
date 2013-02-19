<?php

require_once('Smarty.class.php');
require_once('Config/Config.php');

class Template{
  
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $this->Smarty->template_dir = Config::SMARTY_TEMPLATES;
    $this->Smarty->compile_dir = Config::SMARTY_TEMPLATES_C;
    $this->Smarty->cache_dir = Config::SMARTY_CACHE;
  }

  public function assign($tmp_value,$value){
    $this->Smarty->assign($tmp_value,$value);
  }

  public function display($template){
    $template_file = $this->Smarty->template_dir.$template;
    $this->Smarty->display($template_file);
  }

}

?>
