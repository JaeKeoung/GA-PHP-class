<?php /* Smarty version 3.1.27, created on 2017-06-21 12:53:59
         compiled from "C:\xampp\htdocs\20170621\php_libs\smarty\templates\testlogin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12056594a5047e67842_46959474%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b29c0f13f733e8dbb031c65e3962fc8784f66aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170621\\php_libs\\smarty\\templates\\testlogin.tpl',
      1 => 1498041770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12056594a5047e67842_46959474',
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594a504803a9c6_68374443',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594a504803a9c6_68374443')) {
function content_594a504803a9c6_68374443 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12056594a5047e67842_46959474';
echo $_smarty_tpl->tpl_vars['title']->value;?>

<FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
    <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
:</FONT>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
<br>
    <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
:</FONT>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>

    <INPUT type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

</FORM><?php }
}
?>