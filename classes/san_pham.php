<?php
include_once("database.php");
class San_pham extends database
{
	//Đọc tất cả
	public function Doc_san_pham()
	{
		$sql="SELECT * FROM san_pham";
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	//Đọc sản phẩm theo ma_san_pham
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql="SELECT * FROM san_pham ";
		$sql.="WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_san_pham);
		
		return $this->loadRow($parram);
	}
	//`ma_san_pham`, `ten_san_pham`, `ma_loai`, `don_gia`, `hinh`
	//Cập nhật
	
	//Thêm 
	public function Them_san_pham($ten_san_pham,$ma_loai,$don_gia,$hinh)
	{
		$sql="INSERT INTO san_pham ";
		$sql.="VALUES(?,?,?,?,?)";
		
		$this->setQuery($sql);
		$parram=array(NULL,$ten_san_pham,$ma_loai,$don_gia,$hinh);
		
		return $this->execute($parram);	
	}
	
	//Sửa
	public function Sua_san_pham($ma_san_pham,$ten_san_pham,$ma_loai,$don_gia,$hinh)
	{
		$sql="UPDATE san_pham ";
		$sql.="SET ten_san_pham=?, ma_loai=?, don_gia=?, hinh=? ";
		$sql.="WHERE ma_san_pham=?";
		
		$this->setQuery($sql);
		$parram=array($ten_san_pham,$ma_loai,$don_gia,$hinh,$ma_san_pham);
		
		return $this->execute($parram);
		
	}
	
	//Xóa
	public function Xoa_san_pham($ma_san_pham)
	{
		$sql="DELETE FROM san_pham ";
		$sql.="WHERE ma_san_pham=?";
		$this->setQuery($sql);
		$parram=array($ma_san_pham);	
		
		return $this->execute($parram);
	}	
}

/*$san_pham=new san_pham();
$arr=$san_pham->Doc_san_pham();
echo "<pre>";
print_r($arr);*/

/*$san_pham=new san_pham();
$ma_san_pham=42;
$arr=$san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
echo "<pre>";
print_r($arr);*/

/*$san_pham=new san_pham();
$ten_san_pham="HAHA";
$ma_loai=5;
$don_gia=99;
$hinh="chưa có hìng";
$kq=$san_pham->Them_san_pham($ten_san_pham,$ma_loai,$don_gia,$hinh);

echo $kq->rowCount();*/

/*$san_pham=new san_pham();
$ma_san_pham=50;
$ten_san_pham="HIHI";
$ma_loai=1;
$don_gia=1000;
$hinh="hinh.png";
$kq=$san_pham->Sua_san_pham($ma_san_pham,$ten_san_pham,$ma_loai,$don_gia,$hinh);
echo $kq->rowCount();*/


/*$san_pham=new san_pham();
$ma_san_pham=50;
$kq=$san_pham->Xoa_san_pham($ma_san_pham);

echo $kq->rowCount();*/

?>