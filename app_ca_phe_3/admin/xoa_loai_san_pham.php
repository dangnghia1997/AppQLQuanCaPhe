<?php
include("models/m_loai_san_pham.php");
$m_loai_san_pham=new M_loai_san_pham();
$ma_loai=$_GET["ma_loai"];
$kq=$m_loai_san_pham->Xoa_loai_san_pham($ma_loai);
if($kq)
{
	echo "<script>window.location='xem_ds_loai_san_pham.php';alert('Đã xóa!')</script>";	
}
?>