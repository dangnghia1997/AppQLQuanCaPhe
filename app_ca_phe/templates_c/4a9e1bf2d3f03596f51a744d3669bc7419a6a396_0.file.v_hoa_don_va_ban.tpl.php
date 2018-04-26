<?php
/* Smarty version 3.1.30, created on 2018-04-26 04:45:32
  from "D:\wamp64\www\app_ca_phe\views\v_hoa_don_va_ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae1596cdd9815_28218857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a9e1bf2d3f03596f51a744d3669bc7419a6a396' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe\\views\\v_hoa_don_va_ban.tpl',
      1 => 1524717928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae1596cdd9815_28218857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content">
        <!--START menu-trong -->
        <div class="container-fluid">
        	
            <div class="fix">
                    <ul class="nav navbar-nav fix">
                        <li><a href=".?var_hoa_don=1">Hóa đơn</a></li>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lau']->value, 'lau');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lau']->value) {
?>
                        <li><a href=".?ma_lau=<?php echo $_smarty_tpl->tpl_vars['lau']->value->ma_lau;?>
"><?php echo $_smarty_tpl->tpl_vars['lau']->value->ten_lau;?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
            	</div>
            
        </div>
        <!--END menu-trong -->

        <div class="container-fluid">
        
        	<?php if ($_smarty_tpl->tpl_vars['var_hoa_don']->value == 1) {?>
            	<div class="wrapper-hoa_don">
                    <div class="hoadon">
                        <div class="tieu_de_hoa_don">
                            <span>Tầng 1- Bàn 1</span>
                        </div>
                        <div class="noidung_hoa_don">
                            <div class="dong">Thời gian: 13:00</div>
                            <div class="dong">
                                <span class="mang_ve">Mang đi</span>
                                <span class="gia">139000</span>
                            </div>
                            <div class="dong">
                                <ul>
                                    <li><a href="#">Thanh Toán</a></li>
                                    <li><a href="#">Xem hóa đơn</a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
            <?php } else { ?>
            	
                 <div class="cho_ngoi">
                <ul>
                	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_ban_theo_lau']->value, 'ban');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ban']->value) {
?>
                    <li><a href="menu.php?ma_ban=<?php echo $_smarty_tpl->tpl_vars['ban']->value->ma_ban;?>
"><?php echo $_smarty_tpl->tpl_vars['ban']->value->ten_ban;?>
</a></li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <div style="clear: both;"></div>;
                </ul>
                <div style="clear: both;"></div>
            </div>
                
            <?php }?>
            
           
        </div>
    </div><?php }
}
