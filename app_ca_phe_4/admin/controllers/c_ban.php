<?php
class C_ban
{
	public function Hien_thi_ban()
	{
		//models
			include("models/m_ban.php");
			include("models/m_lau.php");
			$m_ban=new M_ban();
			$danh_sach_ban=$m_ban->Doc_ban();
			$m_lau=new M_lau();
			$ds_lau=$m_lau->Doc_lau();
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Danh sách bàn";
			$view="views/ban/v_doc_ban.tpl";
			$smarty->assign("view",$view);
			$smarty->assign("title_content",$title_content);
			$smarty->assign("danh_sach_ban",$danh_sach_ban);
			$smarty->assign("ds_lau",$ds_lau);
			$smarty->display("layout.tpl");	
	}	
	
	
	public function Them_ban()
	{
		//models
			include("models/m_lau.php");
			$m_lau=new M_lau();
			$ds_lau=$m_lau->Doc_lau();
			
			if(isset($_POST["btn_them_ban"]))
			{
				$ten_ban=$_POST["ten_ban"];
				$ma_lau=$_POST["ma_lau"];
				$trang_thai=0;
				include("models/m_ban.php");
				$m_ban=new M_ban();
				$kq=$m_ban->Them_ban($ten_ban,$trang_thai,$ma_lau);
				if($kq)
				{
					echo "<script>alert('Thêm thành công!');window.location='xem_ds_ban.php'</script>"	;
				}
				
			}
			
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_ban.php");
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Thêm bàn";
			$view="views/ban/v_them_ban.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_lau",$ds_lau);
			$smarty->display("layout.tpl");	
	}
	
	
	public function Cap_nhat_ban()
	{
		//models
			include("models/m_lau.php");
			include("models/m_ban.php");
			$m_lau=new M_lau();
			$ds_lau=$m_lau->Doc_lau();
			$ma_ban=$_GET["ma_ban"];
			$m_ban=new M_ban();
			$ban_theo_ma_ban=$m_ban->Doc_ban_theo_ma_ban($ma_ban);
			
			if(isset($_POST["btn_sua_ban"]))
			{
				$ten_ban=$_POST["ten_ban"];
				$ma_lau=$_POST["ma_lau"];
				$trang_thai=$_POST["trang_thai"];
				
				$kq=$m_ban->Sua_ban($ma_ban,$ten_ban,$trang_thai,$ma_lau);
				if($kq)
				{
					echo "<script>alert('Đã cập nhật!');window.location='xem_ds_ban.php'</script>"	;
				}	
			}
			
			if(isset($_POST["btn_bo_qua"]))
				header("location:xem_ds_ban.php");
			
		//views
			include("controllers/smarty_quan_tri.php");
			$smarty=new Smarty_quan_tri();
			$title_content="Cập nhật bàn";
			$view="views/ban/v_sua_ban.tpl";
			$smarty->assign("title_content",$title_content);
			$smarty->assign("view",$view);
			$smarty->assign("ds_lau",$ds_lau);
			$smarty->assign("ban_theo_ma_ban",$ban_theo_ma_ban);
			$smarty->display("layout.tpl");	
	}
	
	public function Xoa_ban()
	{
		//models
			include("models/m_ban.php");
			$m_ban=new M_ban();
			$ma_ban=$_GET["ma_ban"];
			$kq=$m_ban->Xoa_ban($ma_ban);
			if($kq)
			{
				echo "<script>window.location='xem_ds_ban.php';alert('Đã Xóa!')</script>"	;
			}	
	}
}
?>