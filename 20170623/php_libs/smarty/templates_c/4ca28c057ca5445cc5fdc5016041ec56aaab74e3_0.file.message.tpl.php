<?php /* Smarty version 3.1.27, created on 2017-06-23 14:34:15
         compiled from "C:\xampp\htdocs\20170623\php_libs\smarty\templates\message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31466594d0ac75cd3a6_17266191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca28c057ca5445cc5fdc5016041ec56aaab74e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\templates\\message.tpl',
      1 => 1498218437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31466594d0ac75cd3a6_17266191',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'is_system' => 0,
    'add_pageID' => 0,
    'disp_login_state' => 0,
    'message' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594d0ac760bba5_88532322',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594d0ac760bba5_88532322')) {
function content_594d0ac760bba5_88532322 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31466594d0ac75cd3a6_17266191';
?>
<HTML>
<HEAD>
    <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
</HEAD>
<BODY>
<CENTER>
    <HR size="1" noshade>
    <B><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</B>
    <HR size="1" noshade>
    <TABLE width="100%" border="0" cellspacing="5" cellpadding="5">
        <TR>
            <TD width="22%" align="left" valign="top">
                [ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">메인 페이지로</A> ]
                <?php if (($_smarty_tpl->tpl_vars['is_system']->value)) {?>
                    <BR>
                    <BR>
                    [
                    <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">회원목록</A>
                    ]
                <?php }?>
                <BR>
                <BR>
                <?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

            </TD>
            <TD width="78%" align="left" valign="top">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </TD>
        </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
    <PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML><?php }
}
?>