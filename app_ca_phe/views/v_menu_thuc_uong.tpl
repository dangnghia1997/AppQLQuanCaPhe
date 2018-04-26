<div class="content">
  <div class="left">
  <div id="hien_thi_san_pham_theo_loai_san_pham">
  	{foreach from=$ds_san_pham_theo_ma_loai item=san_pham}
      	
       <div class="khung">
      	
        <a href="javascript:XL_san_pham({$san_pham->ma_san_pham},{$ma_ban})">
          <div class="imgage"> 
          	<img src="public/images/{$san_pham->hinh}" alt=""> 
          </div>
          <span>{$san_pham->ten_san_pham}</span>
 		</a>
       </div>
        
     {/foreach}
    </div>
    
   </div>
  <div class="right">
    <div class="right-top" >
   
      <div class="title_hang" style="border-top:none">
        <h4>{if $ma_ban>0}
        		{$ban_theo_ma_ban->ten_ban}
            {else}
            	{$ban_theo_ma_ban}
        	{/if}
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
