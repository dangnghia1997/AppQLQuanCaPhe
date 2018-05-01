<?php
/* Smarty version 3.1.30, created on 2018-05-01 05:47:13
  from "E:\wamp64\www\app_ca_phe_2\admin\views\lau\v_them_lau.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7ff61c1c970_09424613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b0dedec7c13eeee61af40185a22d507c66e67c' => 
    array (
      0 => 'E:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\lau\\v_them_lau.tpl',
      1 => 1525153023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7ff61c1c970_09424613 (Smarty_Internal_Template $_smarty_tpl) {
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
        <label>Tên lầu</label>
        <input class="text-input small-input" type="text" id="small-input" name="ten_lau" />
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_lau"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
