<?php
/* Smarty version 3.1.30, created on 2018-05-01 15:55:17
  from "D:\wamp64\www\app_ca_phe_2\admin\views\user\v_them_tai_khoan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae88de5c712a9_89686504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e428bdb491a22b921cb7f2197ea4c73642353b22' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe_2\\admin\\views\\user\\v_them_tai_khoan.tpl',
      1 => 1525190108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae88de5c712a9_89686504 (Smarty_Internal_Template $_smarty_tpl) {
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
        <label>Username</label>
        <input class="text-input small-input" type="text" id="small-input" name="username" />
        
      </p>
      <br />
      <p>
        <label>Password</label>
        <input class="text-input small-input" type="text" id="small-input" name="password" />
        
      </p>
      <br />
      <p>
        <label>Họ tên</label>
        <input class="text-input small-input" type="text" id="small-input" name="fullname" />
        
      </p>
      <br />
      <p>
        <label>Ngày sinh</label>
        <input class="text-input small-input" type="date" id="small-input" name="birthdate" />
        
      </p>
      <br />
      <p>
        <label>Giới tính</label>
        <input type="radio" value="1" name="gender" checked/>Nam
        <input type="radio" value="0" name="gender" />Nữ
        
      </p>
      <br />
      <p>
        <label>Địa chỉ</label>
        <input class="text-input small-input" type="text" id="small-input" name="address" />
        
      </p>
      <br />
      <p>
        <label>Email</label>
        <input class="text-input small-input" type="text" id="small-input" name="email" />
        
      </p>
      <br />
      <p>
        <label>Chứng minh nhân dân</label>
        <input class="text-input small-input" type="text" id="small-input" name="idcard" />
        
      </p>
      <br />
      <p>
        <label>Số điện thoại</label>
        <input class="text-input small-input" type="text" id="small-input" name="phone_number" />
        
      </p>
      <br />
      <p>
        <label>Cấp quyền</label>
        <input type="radio" name="phan_quyen" value="0" checked/>Nhân viên
        <input type="radio" name="phan_quyen" value="1"/>Quản lý
        
        
      </p>
      <br />
      <p>
        <input class="button" type="submit" value="Thêm" name="btn_them_tai_khoan"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
<?php }
}
