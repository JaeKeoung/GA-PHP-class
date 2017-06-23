<?php /* Smarty version 3.1.27, created on 2017-06-23 13:48:53
         compiled from "C:\xampp\htdocs\20170623\php_libs\smarty\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20190594d0025d07291_43931606%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6706dbe8ca8cdd59fdc3236b0f6b50f6a3da8fdc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\templates\\login.tpl',
      1 => 1498218437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20190594d0025d07291_43931606',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'form' => 0,
    'type' => 0,
    'auth_error_mess' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594d002616a810_68098178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594d002616a810_68098178')) {
function content_594d002616a810_68098178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20190594d0025d07291_43931606';
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
            <TD width="22%">
                <FORM method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">
                    <TABLE border="0" cellpadding="0" cellspacing="0" summary="login form" width="100">
                        <TR>
                            <TD colspan="2" bgcolor="#eeeeee"><B><FONT size="2">회원페이지:</FONT></B></TD>
                        </TR>
                        <TR>
                            <TD nowrap><FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
:</FONT></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
</TD>
                        </TR>

                        <TR>
                            <TD nowrap><FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
:</FONT></TD>
                            <TD><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>
</TD>
                        </TR>
                        <TR>
                            <TD colspan="2">
                                <INPUT type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                                <DIV align="center"><?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>
</DIV>
                                <BR>
                                <FONT size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['auth_error_mess']->value;?>
 </FONT></TD>
                        </TR>
                    </TABLE>
                </FORM>

            </TD>
            <TD width="78%" align="left" valign="top">
                <P>회원인 경우에는 로그인하세요.</P>
                <P><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=regist&action=form">회원이 아닌 경우에는 여기에서 가입할 수 있습니다.</a></P>
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