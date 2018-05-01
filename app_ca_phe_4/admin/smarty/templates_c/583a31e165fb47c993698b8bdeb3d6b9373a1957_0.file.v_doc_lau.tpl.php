<?php
/* Smarty version 3.1.30, created on 2018-05-01 05:47:03
  from "E:\wamp64\www\app_ca_phe_2\admin\views\lau\v_doc_lau.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7ff573951e1_27445244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '583a31e165fb47c993698b8bdeb3d6b9373a1957' => 
    array (
      0 => 'E:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\lau\\v_doc_lau.tpl',
      1 => 1525153023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7ff573951e1_27445244 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['title_content']->value;?>
</h3>
</div>
<div class="tab-content default-tab"> <!-- This is the target div. id must match the href of this div's tab -->
  
  <table>
    <thead>
      <tr>
        <th><input class="check-all" type="checkbox" /></th>
        <th>Tên Lầu</th>
        <th>Sửa/Xóa</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <td colspan="6">
        
          <div class="pagination">
           <a href="#" class="number" title="1">1</a>
            <a href="#" class="number" title="2">2</a> 
            <a href="#" class="number current" title="3">3</a>
            <a href="#" class="number" title="4">4</a>
            </div>
          
          <!-- End .pagination -->
          
          <div class="clear"></div></td>
      </tr>
    </tfoot>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_lau']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_lau;?>
</td>
        <td><!-- Icons --> 
          <a href="sua_lau.php?ma_lau=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_lau;?>
" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_lau(<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_lau;?>
)" title="Delete"><img src="public/quan_tri/images/icons/cross.png" alt="Delete" /></a> 
          </td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
  </table>
</div>
<?php }
}
