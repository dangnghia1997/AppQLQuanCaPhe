<?php
include_once("database.php");
class Lau extends database
{
	//Đọc tất cả
	public function Doc_lau()
	{
		$sql="SELECT * FROM lau";
		$this->setQuery($sql);
		
		return $this->loadAllRows();
	}
	
	//Đọc lầu theo ma_lau
	public function Doc_lau_theo_ma_lau($ma_lau)
	{
		$sql="SELECT * FROM lau ";
		$sql.="WHERE ma_lau=?";
		$this->setQuery($sql);
		$parram=array($ma_lau);
		
		return $this->loadRow($parram);
	}
	
	//Cập nhật
	
	//Thêm 
	public function Them_lau($ma_lau,$ten_lau)
	{
		$sql="INSERT INTO lau ";
		$sql.="VALUES(?,?)";
		
		$this->setQuery($sql);
		$parram=array($ma_lau,$ten_lau);
		
		return $this->execute($parram);	
	}
	
	//Sửa
	public function Sua_lau($ma_lau,$ten_lau)
	{
		$sql="UPDATE lau ";
		$sql.="SET ten_lau=? ";
		$sql.="WHERE ma_lau=?";
		
		$this->setQuery($sql);
		$parram=array($ten_lau,$ma_lau);
		
		return $this->execute($parram);
		
	}
	
	//Xóa
	public function Xoa_lau($ma_lau)
	{
		$sql="DELETE FROM lau ";
		$sql.="WHERE ma_lau=?";
		$this->setQuery($sql);
		$parram=array($ma_lau);	
		
		return $this->execute($parram);
	}	
}

/*$lau=new Lau();
$arr=$lau->Doc_lau();
echo "<pre>";
print_r($arr);*/

/*$lau=new Lau();
$ma_lau="L01";
$arr=$lau->Doc_lau_theo_ma_lau($ma_lau);
echo "<pre>";
print_r($arr);*/

/*$lau=new Lau();
$ma_lau="L05";

$ten_lau="HAHA";
$kq=$lau->Them_lau($ma_lau,$ten_lau);

var_dump($kq->rowCount());*/

/*$lau=new Lau();
$ma_lau="L05";
$ten_lau="HIHI";
$kq=$lau->Sua_lau($ma_lau,$ten_lau);
echo $kq->rowCount();
*/

/*$lau=new Lau();
$ma_lau="L05";
$kq=$lau->Xoa_lau($ma_lau);

echo $kq->rowCount();
*/
?>