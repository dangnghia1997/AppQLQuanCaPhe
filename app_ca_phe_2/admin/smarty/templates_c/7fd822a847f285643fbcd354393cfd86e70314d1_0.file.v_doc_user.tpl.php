<?php
/* Smarty version 3.1.30, created on 2018-05-01 05:46:37
  from "E:\wamp64\www\app_ca_phe_2\admin\views\user\v_doc_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7ff3d281836_41135497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd822a847f285643fbcd354393cfd86e70314d1' => 
    array (
      0 => 'E:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\user\\v_doc_user.tpl',
      1 => 1525153023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7ff3d281836_41135497 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>Username</th>
        <th>Password</th>
        <th>Họ tên</th>
        <th>Số điện thoại</th>
        <th>Quyền</th>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_user']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
      <tr>
        <td>
        <input type="checkbox" />
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->username;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->password;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->fullname;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value->phone_number;?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['ds']->value->phan_quyen == 0) {?>
        <td>Nhân Viên</td>
        <?php } else { ?>
        <td>Quản Lý</td>
        <?php }?>
        <td><!-- Icons --> 
          <a href="sua_user.php?id=<?php echo $_smarty_tpl->tpl_vars['ds']->value->id;?>
" title="Edit"><img src="public/quan_tri/images/icons/pencil.png" alt="Edit" /></a> 
          <a href="javascript:Xoa_user(<?php echo $_smarty_tpl->tpl_vars['ds']->value->id;?>
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
