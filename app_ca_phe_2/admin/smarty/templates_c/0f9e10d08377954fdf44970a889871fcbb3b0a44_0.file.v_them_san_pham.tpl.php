<?php
/* Smarty version 3.1.30, created on 2018-05-01 16:05:04
  from "D:\wamp64\www\app_ca_phe_2\admin\views\san_pham\v_them_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae8903011ab22_40987198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9e10d08377954fdf44970a889871fcbb3b0a44' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\san_pham\\v_them_san_pham.tpl',
      1 => 1525190701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae8903011ab22_40987198 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên sản phẩm</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_san_pham" />
        
      </p>
      <br />
      <p>
        <label>Loại sản phẩm</label>
        <select name="ma_loai">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_loai_san_pham']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</option>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
        
      </p>
      <br />
      <p>
        <label>Đơn giá</label>
        <input class="text-input small-input" type="text" id="small-input" name="don_gia" />
        
      </p>
      <br />
      <p>
        <label>Hình</label>
        <input type="file" name="hinh" />
        
      </p>
      
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_san_pham"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
