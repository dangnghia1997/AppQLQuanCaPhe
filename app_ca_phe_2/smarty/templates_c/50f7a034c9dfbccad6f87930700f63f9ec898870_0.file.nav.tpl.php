<?php
/* Smarty version 3.1.30, created on 2018-04-27 17:23:18
  from "D:\wamp64\www\app_ca_phe_2\smarty\templates\nav.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae35c867dca96_06183220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f7a034c9dfbccad6f87930700f63f9ec898870' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\smarty\\templates\\nav.tpl',
      1 => 1524714224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae35c867dca96_06183220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--START NAV -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">...</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href=".">HÓA ĐƠN</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_loai_san_pham']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
                <?php if ((!isset($_smarty_tpl->tpl_vars['ma_ban']->value))) {?>
                <li><a href="javascript:XL_loai_san_pham(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
,0)"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</a></li>
                <?php } else { ?>
                <li><a href="javascript:XL_loai_san_pham(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
,<?php echo $_smarty_tpl->tpl_vars['ma_ban']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</a></li>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-sign-out" style="color: white">Đăng Xuất</i></a></li>

            </ul>
        </div>
    </nav>
    <!--END NAV --><?php }
}
