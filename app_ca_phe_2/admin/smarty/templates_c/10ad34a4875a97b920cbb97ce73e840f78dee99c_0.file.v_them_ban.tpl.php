<?php
/* Smarty version 3.1.30, created on 2018-05-01 07:10:46
  from "E:\wamp64\www\app_ca_phe_2\admin\views\ban\v_them_ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae812f6bfaa10_60235608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ad34a4875a97b920cbb97ce73e840f78dee99c' => 
    array (
      0 => 'E:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\ban\\v_them_ban.tpl',
      1 => 1525158643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae812f6bfaa10_60235608 (Smarty_Internal_Template $_smarty_tpl) {
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
        <label>Tên bàn</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_ban" />
        
      </p>
      <br />
      <p>
        <label>Thuộc lầu</label>
        <select name="ma_lau">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lau']->value, 'lau');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lau']->value) {
?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['lau']->value->ma_lau;?>
"><?php echo $_smarty_tpl->tpl_vars['lau']->value->ten_lau;?>
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
        <input class="button" type="submit" value="Thêm" name="btn_them_ban"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
