<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Layout QLQuanCaphe</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../js/filterElements.js"></script>
  	<!--<script src="../js/todolist.js"></script>-->
  	<script src="../js/jquery.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			filterSelection('all');
			var vi_tri_duoc_chon="";
			//tính cho lầu 1
			$(".filterDiv.L00").click(function(){
				var ban=($(this).text());
				vi_tri_duoc_chon="Trệt  /  " +ban; 
				$("#ban_duoc_chon").addClass("active").html("<a data-toggle='tab' >"+vi_tri_duoc_chon+"</a>");
			})

			//tính cho lầu 2
			$(".filterDiv.L01").click(function(){
				var ban=($(this).text());
				vi_tri_duoc_chon="Lầu 1  /  " +ban; 
				$("#ban_duoc_chon").addClass("active").html("<a data-toggle='tab' >"+vi_tri_duoc_chon+"</a>");
			})
			//tính cho lầu 3
			$(".filterDiv.L02").click(function(){
				var ban=($(this).text());
				vi_tri_duoc_chon="Lầu 2  /  " +ban; 
				$("#ban_duoc_chon").addClass("active").html("<a data-toggle='tab' >"+vi_tri_duoc_chon+"</a>");
			})
			
			//chuyen du lieu qua thanh toan
			//them 1 dong
			/*
			var i = 1;
			$(".filterDiv.tra").click(function(){


				var ten_sp=$("#ten_sp").text();
				var don_gia_sp=$("#don_gia_sp").text();
				 $("#them").append("<tr id='removeRow"+i+"'><td>"+ i +"</td><td><a ><i id='remove"+i+"' class='fa fa-times xoa'></i></a></td><td>"+ten_sp+"</td><td>số lượng</td><td>"+don_gia_sp+"</td><td>soluong*"+don_gia_sp+"</td></tr>");
				 
				 var idMon = 'ten_mon' + i

				 ban.chitietban[0].monan.idMon[i - 1] = idMon;

				 console.log(ban);
				 i++; //them 1 id

			});

			//remove dung dong minh click
			$(document).on('click', '.xoa', (event)=>{
				// $('#removeRow3+tr').remove()
				// $('#removeRow3').remove()
				var id = event.target.id.toString()
				id = id.slice(6, id.length);
				var xoa = 'removeRow' + id;
				$('#'+xoa).remove()

				// console.log($('#them tr').length)
				//lay cac dong trong phan tbody dathem, tra so tt ve 1 duyet tiep
				var mangTr = $('#them tr')
				// console.log(mangTr)
				var idx = 1;
				mangTr.each(function(){
					var td = $(this).children('td:first');
					td.text(idx);
					idx++;
				})

				i--;//xoa 1 id
			})
			*/
			
		})
	</script>
	
</head>

<body>