<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cửa Hàng Bán Điện Thoại</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="../js/boxOver.js"></script>
<style>
		table, th, td 
		{
		border: 1px solid black;
		}
</style>
</head>
<body>
<div id="main_container">
  <div id="header">
    <div class="top_right"></div>
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <ul class="menu">
        <li><a href="../index.php" class="nav"> Trang Chủ </a></li>
        <li class="divider"></li>
        <li><a href="../sanpham.php" class="nav">Sản Phẩm</a></li>
        <li class="divider"></li>
        <li><a href="../khuyenmai.php" class="nav">Khuyến Mãi</a></li>
        <li class="divider"></li>
        <li><a href="../lienhe.php" class="nav">Liên Hệ</a></li>
		<li class="divider"></li>
		<li><a href="hangdt_quanly.php" class="nav">QL Hãng</a></li>
		<li class="divider"></li>
		<li><a href="dt_quanly.php" class="nav">QL Điện Thoại</a></li>
		<li class="divider"></li>
        <li><a href="thoat.php" class="nav">Thoát</a></li>
      </ul>
    </div>
    <!-- end of menu tab -->
    <div class="left_content"></div>
    <!-- end of left content -->
    <div class="center_content">
    <?php
		// Khoi chay Session
		session_start();

		// dang nhap thanh cong
		if (isset( $_SESSION['taikhoan'] ) ) 
		{
			?>
			<table style="width:100%">
			<tr>
			<th>MÃ ĐT</th> 
			<th>TÊN ĐT</th>
			<th>MÔ TẢ</th>
			<th>GIÁ N.YẾT</th>
			<th>GIÁ KM</th>
			<th>SỐ LƯỢNG</th>
			<th>HÃNG ĐT</th>
			<th>HÌNH ẢNH</th>
			</tr>			
			
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "cuahangdienthoai";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT IDDT, TENDT, MOTA, GIANIEMYET, GIAKM, SOLUONG, MADT, HINHANH FROM chitietdt";
			$result = $conn->query($sql);
			
			
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				?>
					<tr>
					<td><?php echo $row["IDDT"]; ?></td> 
					<td><?php echo $row["TENDT"]; ?></td>
					<td><?php echo ''; ?></td>
					<td><?php echo $row["GIANIEMYET"]; ?></td>
					<td><?php echo $row["GIAKM"]; ?></td>
					<td><?php echo $row["SOLUONG"]; ?></td>
					<td><?php echo $row["MADT"]; ?></td>
					<td><?php echo $row["HINHANH"]; ?></td>
					<td>
						<a href="dt_xoa.php?iddt=<?php echo $row["IDDT"]; ?>&tendt=<?php echo $row["TENDT"]; ?>" target="_blank" >XÓA</a>
						<a href="dt_thongtin.php?iddt=<?php echo $row["IDDT"]; ?>&tendt=<?php echo $row["TENDT"]; ?>&gianiemyet=<?php echo $row["GIANIEMYET"]; ?>&giakm=<?php echo $row["GIAKM"]; ?>&soluong=<?php echo $row["SOLUONG"]; ?>&hinhanh=<?php echo $row["HINHANH"]; ?>" target="_blank" >SỬA</a>
					</td>
					</tr>
				<?php
				
			}
			}
			$conn->close();
			
			?>
			
			</table>
			

			
			<form action="dt_them.php" method="get">
				
				Tên Điện Thoại<br>
				<input type="text" name="tendt" value=""><br>
				
				Mã Hãng ĐT<br>
				<input type="text" name="madt" value=""><br>

				Giá Niêm Yết<br>
				<input type="text" name="gianiemyet" value=""><br>

				Giá KM<br>
				<input type="text" name="giakm" value=""><br>

				Số Lượng<br>
				<input type="text" name="soluong" value=""><br>

				Hình Ảnh<br>
				<input type="text" name="hinhanh" value=""><br>
				<input type="submit" value="Thêm Mới">
			</form> 
			<br><br>
			<form target="_blank" action="upload.php" method="post" enctype="multipart/form-data">
				Upload Hình Ảnh:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload Image" name="submit">
			</form>
			
			<?php
		} 
		else // chua dang nhap
		{    
			echo 'Yêu cầu đăng nhập !!!';
		}
	?>
		</div>
    <!-- end of center content -->
    <div class="right_content">
	
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer">  </div>
    <div class="center_footer"> 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM <br />
      <a href="http://csscreme.com"><img src="../images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
      <img src="../images/payment.gif" alt="" /> </div>
    <div class="right_footer"></div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
