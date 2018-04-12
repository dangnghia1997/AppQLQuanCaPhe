<?php
include_once("database.php");
class Ban extends database
{
	//Đọc tất cả
	public function Doc_ban()
	{
		$sql="SELECT * FROM ban";
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	//Đọc lầu theo ma_ban
	public function Doc_ban_theo_ma_ban($ma_ban)
	{
		$sql="SELECT * FROM ban ";
		$sql.="WHERE ma_ban=?";
		$this->setQuery($sql);
		$parram=array($ma_ban);
		
		return $this->loadRow($parram);
	}
	
	//Cập nhật
	//`ma_ban`, `ten_ban`, `trang_thai`, `ma_lau`
	//Thêm 
	public function Them_ban($ma_ban,$ten_ban,$trang_thai,$ma_lau)
	{
		$sql="INSERT INTO ban ";
		$sql.="VALUES(?,?,?,?)";
		
		$this->setQuery($sql);
		$parram=array($ma_ban,$ten_ban,$trang_thai,$ma_lau);
		
		return $this->execute($parram);	
	}
	
	//Sửa
	public function Sua_ban($ma_ban,$ten_ban,$trang_thai,$ma_lau)
	{
		$sql="UPDATE ban ";
		$sql.="SET ten_ban=?, trang_thai=?, ma_lau=? ";
		$sql.="WHERE ma_ban=?";
		
		$this->setQuery($sql);
		$parram=array($ten_ban,$trang_thai,$ma_lau,$ma_ban);
		
		return $this->execute($parram);
		
	}
	
	//Xóa
	public function Xoa_ban($ma_ban)
	{
		$sql="DELETE FROM ban ";
		$sql.="WHERE ma_ban=?";
		$this->setQuery($sql);
		$parram=array($ma_ban);	
		
		return $this->execute($parram);
	}	
}

/*$ban=new ban();
$arr=$ban->Doc_ban();
echo "<pre>";
print_r($arr);*/

/*$ban=new ban();
$ma_ban="B08";
$arr=$ban->Doc_ban_theo_ma_ban($ma_ban);
echo "<pre>";
print_r($arr);*/

/*$ban=new ban();
$ma_ban="B45";
$ten_ban="HAHA";
$trang_thai=1;
$ma_lau="L01";
$kq=$ban->Them_ban($ma_ban,$ten_ban,$trang_thai,$ma_lau);
echo $kq->rowCount();*/

/*$ban=new ban();
$ma_ban="B45";
$ten_ban="HIHI";
$trang_thai=0;
$ma_lau="L02";
$kq=$ban->Sua_ban($ma_ban,$ten_ban,$trang_thai,$ma_lau);
echo $kq->rowCount();*/


/*$ban=new ban();
$ma_ban="B45";
$kq=$ban->Xoa_ban($ma_ban);

echo $kq->rowCount();*/

?>