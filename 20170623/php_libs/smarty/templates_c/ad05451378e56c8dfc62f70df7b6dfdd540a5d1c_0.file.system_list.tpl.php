<?php /* Smarty version 3.1.27, created on 2017-06-23 15:35:20
         compiled from "C:\xampp\htdocs\20170623\php_libs\smarty\templates\system_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2064594d1918762c61_14136311%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad05451378e56c8dfc62f70df7b6dfdd540a5d1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\templates\\system_list.tpl',
      1 => 1498218437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064594d1918762c61_14136311',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'disp_login_state' => 0,
    'add_pageID' => 0,
    'form' => 0,
    'search_key' => 0,
    'count' => 0,
    'links' => 0,
    'data' => 0,
    'item' => 0,
    'debug_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_594d191880ea61_30215395',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_594d191880ea61_30215395')) {
function content_594d191880ea61_30215395 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\20170623\\php_libs\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '2064594d1918762c61_14136311';
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
                <BR>
                <BR>
                <?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

            </TD>
            <TD width="78%" align="left" valign="top">
                <P>[ <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=regist&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">신규등록</a> ]
                    <BR>
                <FORM <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                    이름：<INPUT type="text" name="search_key" value="<?php echo $_smarty_tpl->tpl_vars['search_key']->value;?>
">
                    <INPUT type="submit" name="submit" value="검색하기">
                    <INPUT type="hidden" name="type" value="list">
                    <INPUT type="hidden" name="action" value="form">
                </FORM>
                검색결과는<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
건입니다.<BR>
                <BR>
                <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                <?php if (($_smarty_tpl->tpl_vars['data']->value)) {?>
                    <TABLE width="100%" border="1" cellspacing="0" cellpadding="8">
                        <TBODY>
                        <TR>
                            <TH>번호</TH>
                            <TH>성</TH>
                            <TH>이름</TH>
                            <TH>생년월일</TH>
                            <TH>행정구역</TH>
                            <TH>등록일</TH>
                            <TH></TH>
                            <TH></TH>
                        </TR>
                        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
                            <TR>
                                <TD align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</TD>
                                <TD><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['last_name'], ENT_QUOTES, 'UTF-8', true);?>
</TD>
                                <TD><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['first_name'], ENT_QUOTES, 'UTF-8', true);?>
</TD>
                                <TD align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['birthday'],"%Y-%m-%d");?>
</TD>
                                <TD align="center"><?php echo $_smarty_tpl->tpl_vars['item']->value['prefecture'];?>
</TD>
                                <TD align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['reg_date'],"%Y-%m-%d");?>
</TD>
                                <TD align="center">[<a
                                            href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=modify&action=form&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];
echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">수정</a>]
                                </TD>
                                <TD align="center">[<a
                                            href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=delete&action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];
echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">삭제</a>]
                                </TD>
                            </TR>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                        </TBODY>
                    </TABLE>
                <?php }?>
                </P>
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