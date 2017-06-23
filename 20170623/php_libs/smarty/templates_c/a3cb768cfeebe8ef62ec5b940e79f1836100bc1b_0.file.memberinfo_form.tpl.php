<?php /* Smarty version 3.1.27, created on 2017-06-23 14:33:20
         compiled from "C:\xampp\htdocs\20170623\php_libs\smarty\templates\memberinfo_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31628594d0a90c6d522_76109433%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3cb768cfeebe8ef62ec5b940e79f1836100bc1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\templates\\memberinfo_form.tpl',
      1 => 1498218437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31628594d0a90c6d522_76109433',
  'variables' => 
  array (
    'title' => 0,
    'form' => 0,
    'SCRIPT_NAME' => 0,
    'is_system' => 0,
    'add_pageID' => 0,
    'disp_login_state' => 0,
    'message' => 0,
    'type' => 0,
    'action' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594d0a90d5b9a6_90592661',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594d0a90d5b9a6_90592661')) {
function content_594d0a90d5b9a6_90592661 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31628594d0a90c6d522_76109433';
?>
<>
<HTML>
<HEAD>
    <TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</TITLE>
    <?php echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

</HEAD>
<BODY bgcolor="#FFFFFF">
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
                <BR><BR>
                <?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

            </TD>
            <TD width="78%" align="left" valign="top">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                    <TABLE width="95%" border="0" cellspacing="5" cellpadding="0">
                        <TR valign="top">
                            <TD nowrap align="right" width="150">
                                <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
：</FONT></TD>
                            <TD width="79%">
                                <?php if ($_smarty_tpl->tpl_vars['form']->value['username']['error']) {?>
                                    <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['error'];?>
</font>
                                    <BR>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
</TD>
                        </TR>
                        <TR valign="top">
                            <TD nowrap align="right" width="150">
                                <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
：</FONT></TD>
                            <TD width="79%">
                                <?php if ($_smarty_tpl->tpl_vars['form']->value['password']['error']) {?>
                                    <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['error'];?>
</font>
                                    <BR>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>
</TD>
                        </TR>
                        <TR valign="top">
                            <TD nowrap align="right" width="150">
                                <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['label'];?>
：</FONT></TD>
                            <TD width="79%">
                                <?php if ($_smarty_tpl->tpl_vars['form']->value['last_name']['error']) {?>
                                    <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['error'];?>
</font>
                                    <BR>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['last_name']['html'];?>
</TD>
                        </TR>
                        <TR valign="top">
                            <TD nowrap align="right" width="150">
                                <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['label'];?>
：</FONT></TD>
                            <TD width="79%">
                                <?php if ($_smarty_tpl->tpl_vars['form']->value['first_name']['error']) {?>
                                    <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['error'];?>
</font>
                                    <BR>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['first_name']['html'];?>
</TD>
                        </TR>
                        <TR valign="top">
                            <TD nowrap align="right" width="150">
                                <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['label'];?>
：</FONT></TD>
                            <TD width="79%">
                                <?php if ($_smarty_tpl->tpl_vars['form']->value['birthday']['error']) {?>
                                    <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['error'];?>
</font>
                                    <BR>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['birthday']['html'];?>
</TD>
                        </TR>
                        <TR valign="top">
                            <TD nowrap align="right" width="150">
                                <FONT size="2"><?php echo $_smarty_tpl->tpl_vars['form']->value['prefecture']['label'];?>
：</FONT></TD>
                            <TD width="79%">
                                <?php if ($_smarty_tpl->tpl_vars['form']->value['prefecture']['error']) {?>
                                    <font size="2" color="red"><?php echo $_smarty_tpl->tpl_vars['form']->value['prefecture']['error'];?>
</font>
                                    <BR>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['prefecture']['html'];?>
</TD>
                        </TR>
                        <TR align="center" valign="top">
                            <TD>&nbsp; </TD>
                            <TD align="left">
                                <?php if (($_smarty_tpl->tpl_vars['form']->value['submit2']['value'] != '')) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value['submit2']['html'];?>
　
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['form']->value['reset']['html'];?>
　
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

                                <INPUT type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                                <INPUT type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                            </TD>
                        </TR>
                    </TABLE>
                    <BR>
                </FORM>
            </TD>
        </TR>
    </TABLE>
</CENTER>
<?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
    <PRE><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</PRE><?php }?>
</BODY>
</HTML></><?php }
}
?>