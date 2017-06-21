<?php /* Smarty version 3.1.27, created on 2017-06-21 12:55:11
         compiled from "C:\xampp\htdocs\20170621\php_libs\smarty\templates\testauth.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23175594a508f19a2c2_21185904%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de801fd8e66ffca2fed7792fbb77d83b33710f01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170621\\php_libs\\smarty\\templates\\testauth.tpl',
      1 => 1498041770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23175594a508f19a2c2_21185904',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594a508f1bd546_45006986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594a508f1bd546_45006986')) {
function content_594a508f1bd546_45006986 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23175594a508f19a2c2_21185904';
echo $_smarty_tpl->tpl_vars['title']->value;?>


[ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=logout">로그아웃</A> ]<?php }
}
?>