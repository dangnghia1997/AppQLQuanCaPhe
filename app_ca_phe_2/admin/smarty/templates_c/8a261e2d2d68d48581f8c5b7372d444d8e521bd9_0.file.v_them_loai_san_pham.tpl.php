<?php
/* Smarty version 3.1.30, created on 2018-04-30 14:55:31
  from "D:\wamp64\www\app_ca_phe_2\admin\views\loai_san_pham\v_them_loai_san_pham.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae72e63b57717_23813049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a261e2d2d68d48581f8c5b7372d444d8e521bd9' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\loai_san_pham\\v_them_loai_san_pham.tpl',
      1 => 1525100045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae72e63b57717_23813049 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div>
  <form action="" method="post">
    <fieldset>
      <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
      
      <p>
        <label>Tên loại</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_loai" />
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_loai"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
