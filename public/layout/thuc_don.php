<?php
include("../../classes/loai_san_pham.php");
include("../../classes/san_pham.php");
$loai_san_phan=new loai_san_pham();
$ds_loai_san_pham=$loai_san_phan->Doc_loai_san_pham();

$san_pham=new San_pham();
$ds_san_pham=$san_pham->Doc_san_pham();

?>
<div id="thuc_don" class="tab-pane fade">
				      	<div id="myBtnContainer-thuc_don">
						  <button class="btn active" onclick="filterSelection('all')">Tất cả</button>
                          <?php
                          	foreach($ds_loai_san_pham as $loai_sp)
							{
						  ?>
						  <button class="btn" onclick="filterSelection('ma_loai<?php echo $loai_sp->ma_loai;?>')"><?php echo $loai_sp->ten_loai?></button>
						  <?php
							}
						  ?>
						</div>
                        
						<div class="container-thuc_don">
							
                            <?php 
								foreach($ds_san_pham as $sp)
								{
							?>
							<a href="#">
							  	<div class="filterDiv ma_loai<?php echo $sp->ma_loai?>">
								  	<img src="../images/<?php echo $sp->hinh?>" width="100%" height="120px">
								  	<p id="<?php echo $sp->ma_san_pham?>"><?php echo $sp->ten_san_pham?></p>
								  	<p id="don_gia_<?php echo $sp->ma_san_pham?>"><?php echo $sp->don_gia?></p>
							  	</div>
							</a>
                            <?php
								}
							?>
							
						</div>
</div>