<div class="content-box-header">
  <h3>{$title_content}</h3>
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
        <input class="button" type="submit" value="Thêm tài khoản" name="btn_them_tai_khoan"/>
        <input class="button" type="submit" value="Bỏ qua" name="btn_bo_qua"/>
      </p>
    </fieldset>
    <div class="clear"></div>
    <!-- End .clear -->
    
  </form>
</div>
