<?php
include_once("database.php");
class loai_san_pham extends database
{
	//Đọc tất cả
	public function Doc_loai_san_pham()
	{
		$sql="SELECT * FROM loai_san_pham";
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	//Đọc loại sản phẩm theo ma_loai_san_pham
	public function Doc_loai_san_pham_theo_ma_loai($ma_loai)
	{
		$sql="SELECT * FROM loai_san_pham ";
		$sql.="WHERE ma_loai=?";
		$this->setQuery($sql);
		$parram=array($ma_loai);
		
		return $this->loadRow($parram);
	}
	
	//Cập nhật
	
	//Thêm 
	public function Them_loai_san_pham($ten_loai)
	{
		$sql="INSERT INTO loai_san_pham ";
		$sql.="VALUES(?,?)";
		
		$this->setQuery($sql);
		$parram=array(NULL,$ten_loai);
		
		return $this->execute($parram);	
	}
	
	//Sửa
	public function Sua_loai_san_pham($ma_loai,$ten_loai)
	{
		$sql="UPDATE loai_san_pham ";
		$sql.="SET ten_loai=? ";
		$sql.="WHERE ma_loai=?";
		
		$this->setQuery($sql);
		$parram=array($ten_loai,$ma_loai);
		
		return $this->execute($parram);
		
	}
	
	//Xóa
	public function Xoa_loai_san_pham($ma_loai)
	{
		$sql="DELETE FROM loai_san_pham ";
		$sql.="WHERE ma_loai=?";
		$this->setQuery($sql);
		$parram=array($ma_loai);	
		
		return $this->execute($parram);
	}	
}

/*$loai_san_pham=new loai_san_pham();
$arr=$loai_san_pham->Doc_loai_san_pham();
echo "<pre>";
print_r($arr);*/

/*$loai_san_pham=new loai_san_pham();
$ma_loai=2;
$arr=$loai_san_pham->Doc_loai_san_pham_theo_ma_loai($ma_loai);
echo "<pre>";
print_r($arr);*/

/*$loai_san_pham=new loai_san_pham();
$ten_loai="HAHA";
$kq=$loai_san_pham->Them_loai_san_pham($ten_loai);

echo $kq->rowCount();*/

/*$loai_san_pham=new loai_san_pham();
$ma_loai="7";
$ten_loai="HIHI";
$kq=$loai_san_pham->Sua_loai_san_pham($ma_loai,$ten_loai);
echo $kq->rowCount();*/


/*$loai_san_pham=new loai_san_pham();
$ma_loai=7;
$kq=$loai_san_pham->Xoa_loai_san_pham($ma_loai);

echo $kq->rowCount();*/

?>