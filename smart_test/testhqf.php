<?php
  require_once("HTML/QuickForm.php");
  require_once("HTML/QuickForm/Renderer/ArraySmarty.php");
  require_once('php_libs/smarty/libs/Smarty.class.php');
  $smarty = new Smarty();
  $smarty->setTemplateDir('php_libs/smarty/templates/');
  $smarty->setCompileDir('php_libs/smarty/templates_c/');
  $smarty->setConfigDir('php_libs/smarty/config/');
  $smarty->setCacheDir('php_libs/smarty/cache/');
  //$smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
  $form = new HTML_QuickForm();
  $form->addElement('text','name','이름',['size' => 30]);
  $form->addRule('name','이름을 입력하세요.','required',null,'server');
  if($form->validate()){
    $form->freeze();
  }
  $form->addElement('submit','submit','전송');
  $renderer = new HTML_QuickForm_Renderer_ArraySmarty($smarty);
  $form->accept($renderer);
  $smarty->assign('form',$renderer->toArray());
  $file = 'testhqf.tpl';
  $smarty->display($file);
?>