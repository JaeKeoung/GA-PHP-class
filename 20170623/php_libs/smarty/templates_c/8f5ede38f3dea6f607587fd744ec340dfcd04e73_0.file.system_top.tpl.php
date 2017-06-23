<?php /* Smarty version 3.1.27, created on 2017-06-23 15:35:17
         compiled from "C:\xampp\htdocs\20170623\php_libs\smarty\templates\system_top.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1235594d19150b3d61_81134586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f5ede38f3dea6f607587fd744ec340dfcd04e73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\templates\\system_top.tpl',
      1 => 1498218437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235594d19150b3d61_81134586',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'disp_login_state' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594d19150ea861_71208614',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594d19150ea861_71208614')) {
function content_594d19150ea861_71208614 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1235594d19150b3d61_81134586';
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
                [ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form">회원목록</A> ] 회원을 검색/수정/삭제합니다.<BR><BR>
                [ <A href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=notice&action=form">공지</A> ] 회원 메인 페이지의 공지를 수정합니다.<BR><BR>
                <BR>
                <BR>
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