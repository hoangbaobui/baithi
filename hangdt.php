<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cửa Hàng Bán Điện Thoại</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div id="header">
    <div class="top_right"></div>
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <ul class="menu">
        <li><a href="index.php" class="nav"> Trang Chủ </a></li>
        <li class="divider"></li>
        <li><a href="sanpham.php" class="nav">Sản Phẩm</a></li>
        <li class="divider"></li>
        <li><a href="khuyenmai.php" class="nav">Khuyến Mãi</a></li>
        <li class="divider"></li>
        <li><a href="lienhe.php" class="nav">Liên Hệ</a></li>
      </ul>
    </div>
    <!-- end of menu tab -->
    <div class="left_content">
      <div class="title_box">Dòng Sản Phẩm</div>
      <ul class="left_menu">
        
		
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

			$sql = "SELECT MADT, TENDT FROM dienthoai";
			$result = $conn->query($sql);
			
			// tính chẵn lẻ
			$chanle=0;
			
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{
				$chanle++;
				if($chanle%2==0)
				{
					?>
					 <li class="odd"><a href="hangdt.php?mahang=<?php echo $row["MADT"]; ?>" target="_blank" ><?php echo $row["TENDT"]; ?></a></li>
					<?php
				}
				else
				{
					?>
					 <li class="even"><a href="hangdt.php?mahang=<?php echo $row["MADT"]; ?>" target="_blank" ><?php echo $row["TENDT"]; ?></a></li>
					<?php
				}
				
			}
			}
			$conn->close();
		?> 
		
		
      </ul>
      <div class="title_box">Sản Phẩm Đặc Biệt</div>
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

			$sql = "SELECT IDDT, TENDT, MOTA, GIANIEMYET, GIAKM, SOLUONG, MADT, HINHANH 
					FROM chitietdt 
					ORDER BY GIANIEMYET DESC
					LIMIT 1";
			
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				
				?>
					
				<div class="prod_box">
				<div class="center_prod_box">
					<div class="product_title"><a href="chitiet.php?id=<?php echo $row["IDDT"]; ?>" target="_blank"><?php echo $row["TENDT"]; ?></a></div>
					<div class="product_img"><a href="chitiet.php?id=<?php echo $row["IDDT"]; ?>" target="_blank"><img src="<?php echo $row["HINHANH"]; ?>" width="60" height="80"  /></a></div>
					<div class="prod_price"><span class="reduce"><?php echo number_format($row["GIANIEMYET"]); ?></span> <span class="price"><?php echo number_format($row["GIAKM"]); ?></span></div>
				</div>
				</div>
					
				<?php
			}
			}
			$conn->close();
		?> 
      <div class="banner_adds"> <a href="#"><img src="imgDT/ipx.png" width="140" height="160" /></a> </div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      
      <div class="center_title_bar">Sản Phẩm</div>
     
      
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

			$sql = "SELECT IDDT, TENDT, MOTA, GIANIEMYET, GIAKM, SOLUONG, MADT, HINHANH 
					FROM chitietdt
					where MADT= '".$_GET['mahang']."'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			
				?>
					
				<div class="prod_box">
				<div class="center_prod_box">
					<div class="product_title"><a href="chitiet.php?id=<?php echo $row["IDDT"]; ?>" target="_blank"><?php echo $row["TENDT"]; ?></a></div>
					<div class="product_img"><a href="chitiet.php?id=<?php echo $row["IDDT"]; ?>" target="_blank"><img src="<?php echo $row["HINHANH"]; ?>" width="60" height="80" /></a></div>
					<div class="prod_price"><span class="reduce"><?php echo number_format($row["GIANIEMYET"]); ?></span> <span class="price"><?php echo number_format($row["GIAKM"]); ?></span></div>
				</div>
					
				</div>
					
				<?php
			}
			}
			$conn->close();
		?> 
	  
	  
	  
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="title_box">Search</div>
      <div class="border_box">
		
		<form action="timkiem.php">
			<input type="text" name="tukhoa" value="">
			<input type="submit" value="Tìm Kiếm">
		</form> 
		
     
      <div class="title_box">Sản Phẩm Mới Nhất</div>
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

			$sql = "SELECT IDDT, TENDT, MOTA, GIANIEMYET, GIAKM, SOLUONG, MADT, HINHANH 
					FROM chitietdt 
					ORDER BY IDDT DESC
					LIMIT 1";
			
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				
				?>
					
				<div class="prod_box">
				<div class="center_prod_box">
					<div class="product_title"><a href="chitiet.php?id=<?php echo $row["IDDT"]; ?>" target="_blank"><?php echo $row["TENDT"]; ?></a></div>
					<div class="product_img"><a href="chitiet.php?id=<?php echo $row["IDDT"]; ?>" target="_blank"><img src="<?php echo $row["HINHANH"]; ?>" width="60" height="80" /></a></div>
					<div class="prod_price"><span class="reduce"><?php echo number_format($row["GIANIEMYET"]); ?></span> <span class="price"><?php echo number_format($row["GIAKM"]); ?></span></div>
				</div>
				</div>
					
				<?php
			}
			}
			$conn->close();
		?>
      <div class="banner_adds"> <a href="#"><img src="imgDT/xi2.png" width="160" height="180" /></a> </div>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer">  </div>
    <div class="center_footer"> 180 Cao Lỗ, Phường 4, Quận 8, TP.HCM <br />
      <a href="http://csscreme.com"><img src="images/csscreme.jpg" alt="csscreme" title="csscreme" border="0" /></a><br />
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer"></div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
