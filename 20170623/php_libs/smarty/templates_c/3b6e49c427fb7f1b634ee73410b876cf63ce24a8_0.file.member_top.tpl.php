<?php /* Smarty version 3.1.27, created on 2017-06-23 14:34:54
         compiled from "C:\xampp\htdocs\20170623\php_libs\smarty\templates\member_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20955594d0aee6c1c39_57090165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6e49c427fb7f1b634ee73410b876cf63ce24a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\templates\\member_top.tpl',
      1 => 1498218437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20955594d0aee6c1c39_57090165',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'disp_login_state' => 0,
    'body' => 0,
    'reg_date' => 0,
    'subject' => 0,
    'last_name' => 0,
    'first_name' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594d0aee727534_00584190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594d0aee727534_00584190')) {
function content_594d0aee727534_00584190 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '20955594d0aee6c1c39_57090165';
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
?type=logout">로그아웃</A> ]
                <BR>
                <BR>
                <?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>


            </TD>
            <TD width="78%" align="left" valign="top">
                <?php if (($_smarty_tpl->tpl_vars['body']->value)) {?>
                    <H3>공지</H3>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reg_date']->value,"%Y-%m-%d");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subject']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <br>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['body']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <br>
                    <br>
                    <br>
                <?php }?>
                <P><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['last_name']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['first_name']->value, ENT_QUOTES, 'UTF-8', true);?>
 님, 안녕하세요!
                    <BR>
                    <BR>
                    <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=modify&action=form">회원등록 정보의 수정</A>
                    <BR>
                    <BR>
                    <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=delete&action=confirm">탈퇴하기</A>
                    <BR>

                </P>
            </TD>
        </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
    <PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML>
<?php }
}
?>