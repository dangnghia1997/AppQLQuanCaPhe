<?php
include("models/m_lau.php");
$m_lau=new M_lau();
$ma_lau=$_GET["ma_lau"];
$kq=$m_lau->Xoa_lau($ma_lau);
if($kq)
{
	echo "<script>alert('Đã Xóa!');window.location='xem_ds_lau.php'</script>"	;
}
?>