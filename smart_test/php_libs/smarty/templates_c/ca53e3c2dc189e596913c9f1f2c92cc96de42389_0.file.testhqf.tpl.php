<?php /* Smarty version 3.1.27, created on 2017-06-19 13:50:00
         compiled from "php_libs\smarty\templates\testhqf.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:289855947ba681e0f21_26533631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca53e3c2dc189e596913c9f1f2c92cc96de42389' => 
    array (
      0 => 'php_libs\\smarty\\templates\\testhqf.tpl',
      1 => 1497872994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289855947ba681e0f21_26533631',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5947ba6822f127_16755042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5947ba6822f127_16755042')) {
function content_5947ba6822f127_16755042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '289855947ba681e0f21_26533631';
echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

<FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['name']['label'];?>
:<?php echo $_smarty_tpl->tpl_vars['form']->value['name']['html'];?>
<BR>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>
<BR>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['name']['error'];?>

</FORM><?php }
}
?>