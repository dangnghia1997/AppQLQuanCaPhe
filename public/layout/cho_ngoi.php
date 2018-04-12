<?php 
include("../../classes/lau.php");
include("../../classes/ban.php");
$lau=new Lau();
$ds_lau=$lau->Doc_lau();

$ban=new Ban();
$ds_ban=$ban->Doc_ban();

?>
<div id="cho_ngoi" class="tab-pane active">
				    	<div id="myBtnContainer-cho_ngoi">
                       
						  <button class="btn active" onclick="filterSelection('all')" >Tất cả</button>
                           <?php 
							foreach($ds_lau as $lau)
							{
							?>
						  <button class="btn" onclick="filterSelection('<?php echo $lau->ma_lau?>')"><?php echo $lau->ten_lau?></button>
						  
                          <?php
							}
						  ?>
						</div>

						<div class="container-cho_ngoi">
                        <?php
                        	foreach($ds_ban as $ban)
							{
						?>
								<!--START Lầu 1 -->
						  <a href="#"><div class="filterDiv <?php echo $ban->ma_lau?>" id='<?php echo $ban->ma_ban?>'><?php echo $ban->ten_ban?></div></a>
                          <?php
							}
						  ?>
						  
						</div>
</div>