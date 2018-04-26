<?php
/* Smarty version 3.1.30, created on 2018-04-26 03:50:45
  from "D:\wamp64\www\app_ca_phe\views\v_menu_thuc_uong.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae14c9565dbe2_07844095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b4947ee78ca957104c005d299138b9504da8987' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe\\views\\v_menu_thuc_uong.tpl',
      1 => 1524714363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae14c9565dbe2_07844095 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content">
  <div class="left">
  <div id="hien_thi_san_pham_theo_loai_san_pham">
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_san_pham_theo_ma_loai']->value, 'san_pham');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->value) {
?>
      	
       <div class="khung">
      	
        <a href="javascript:XL_san_pham(<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
,<?php echo $_smarty_tpl->tpl_vars['ma_ban']->value;?>
)">
          <div class="imgage"> 
          	<img src="public/images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt=""> 
          </div>
          <span><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</span>
 		</a>
       </div>
        
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    
   </div>
  <div class="right">
    <div class="right-top" >
   
      <div class="title_hang" style="border-top:none">
        <h4><?php if ($_smarty_tpl->tpl_vars['ma_ban']->value > 0) {?>
        		<?php echo $_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value->ten_ban;?>

            <?php } else { ?>
            	<?php echo $_smarty_tpl->tpl_vars['ban_theo_ma_ban']->value;?>

        	<?php }?>
        </h4>
      </div>
      <table id="hien_thi_tung_san_pham" width="100%" border="0" style="text-align:center">
      <!--<div id="hien_thi_tung_san_pham"></div>-->
		</table>
    </div>
    <div class="right-middle">
      <label class="container-css">Mang về
        <input type="checkbox">
        <span class="checkmark"></span> </label>
    </div>
    <div class="right-bottom">
      <div class="tong">
        <div class="tien">
          <h3>Tổng</h3>
          <span>234000 đ</span> </div>
        <div class="in"> <a href="#"> <i class="fa fa-print" style="font-size: 64px"></i> </a> </div>
        <div class="clear"></div>
      </div>
      <div class="luu_va_thanhtoan">
        <ul>
          <li> <a href="#">Lưu</a> </li>
          <li> <a href="#">Thanh Toán</a> </li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>

</div>
<?php }
}
