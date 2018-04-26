<div class="content">
        <!--START menu-trong -->
        <div class="container-fluid">
        	
            <div class="fix">
                    <ul class="nav navbar-nav fix">
                        <li><a href=".?var_hoa_don=1">Hóa đơn</a></li>
                        {foreach from=$ds_lau item=lau}
                        <li><a href=".?ma_lau={$lau->ma_lau}">{$lau->ten_lau}</a></li>
                        {/foreach}
                    </ul>
            	</div>
            
        </div>
        <!--END menu-trong -->

        <div class="container-fluid">
        
        	{if $var_hoa_don eq 1}
            	<div class="wrapper-hoa_don">
                    <div class="hoadon">
                        <div class="tieu_de_hoa_don">
                            <span>Tầng 1- Bàn 1</span>
                        </div>
                        <div class="noidung_hoa_don">
                            <div class="dong">Thời gian: 13:00</div>
                            <div class="dong">
                                <span class="mang_ve">Mang đi</span>
                                <span class="gia">139000</span>
                            </div>
                            <div class="dong">
                                <ul>
                                    <li><a href="#">Thanh Toán</a></li>
                                    <li><a href="#">Xem hóa đơn</a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
            {else}
            	
                 <div class="cho_ngoi">
                <ul>
                	{foreach from=$ds_ban_theo_lau item=ban}
                    <li><a href="menu.php?ma_ban={$ban->ma_ban}">{$ban->ten_ban}</a></li>
                    {/foreach}
                    <div style="clear: both;"></div>;
                </ul>
                <div style="clear: both;"></div>
            </div>
                
            {/if}
            
           
        </div>
    </div>