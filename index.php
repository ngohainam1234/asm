<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include "icludes/header.php" ?>
			<div class="innertube">
				<img src="images/3i.jpg" alt=""style="width:1300px;height:320px;">
				<img src="images/AriesGold.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/Atlatic.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/DiamondD.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/Epos.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/Jacques.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/Q-Q.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/s.jpg" alt=""style="width:130px;height:70px;">
				<img src="images/32.png" alt=""style="width:130px;height:70px;">
				<img src="images/A.png" alt=""style="width:130px;height:70px;">
				<table width="100%" border="1" bordercolor="black">
					<tr>
						<td>
							<b></b>
							<img src="images/dh1.jpg" alt="nam" width="150" height="200">
							<p> 3.400.000</p>
							<a href=""> ĐỒNG HỒ CITIZEN</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>	
						</td>
					</tr>
 
					<tr>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>	
						</td>
					</tr>
 
					<tr>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>	
						</td>
					</tr>
 
					<tr>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>
						</td>
						<td>
							<b>Bài 1</b>
							<p>Đây là nội dung bài 1</p>
							<a href=""> Xem thêm</a>	
						</td>
					</tr>
 
				</table>	
			</div>
		</main>
		
		<nav>
			<div class="innertube">
				<h3>SẢN PHẨM MỚI</h3>
				<ul>
					<li><a href="#"><i>Đồng hồ Epos Swiss</i></a></li>
					<li><a href="#"><i>Đồng hồ Atlantic Swiss</i></a></li>
					<li><a href="#"><i>Đồng hồ Diamond D</i></a></li>
					<li><a href="#"><i>Đồng hồ Aries Gold</i></a></li>
					<li><a href="#"><i>Đồng hồ Jacques Lemans</i></a></li>
				</ul>
				<h3>ĐỒNG HỒ NỔI BẬT</h3>
				<ul>
					<li><a href="#"><i>Đồng hồ Citizen</i></a></li>
					<li><a href="#"><i>Đồng hồ Casio</i></a></li>
					<li><a href="#"><i>ĐỒNG HỒ DIAMOND D</i></a></li>
					<li><a href="#"><i>ĐỒNG HỒ ARIES GOLD</i></a></li>
					<li><a href="#"><i>ĐỒNG HỒ JACQUES LEMANS</i></a></li>
				</ul>
				<h3>ĐỒNG HỒ ĐÔI</h3>
				<ul>
					<li><a href="#"><i>STUHRLING ORIGINAL</i></a></li>
					<li><a href="#"><i>STUHRLING ORIGINAL ST</i></a></li>
					<li><a href="#"><i>ĐỒNG HỒ ATLANTIC</i></a></li>
					<li><a href="#"><i>ĐỒNG HỒ ARIES GOLD</i></a></li>
					<li><a href="#"><i>ĐỒNG HỒ CITIZEN</i></a></li>
				</ul>
			</div>
		</nav>
<?php include "icludes/footer.php" ?>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>