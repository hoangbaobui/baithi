<?php
	// Khoi chay Session
	session_start();
	
	// Đăng nhập thành công
	if (isset( $_SESSION['taikhoan'] ) ) 
	{    
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

		$sql = "INSERT INTO chitietdt (TENDT, GIANIEMYET, GIAKM, SOLUONG, MADT, HINHANH)
				VALUES ('".$_GET['tendt']."', ".$_GET['gianiemyet'].", ".$_GET['giakm'].", ".$_GET['soluong'].", '".$_GET['madt']."', '".$_GET['hinhanh']."')";
		$result = $conn->query($sql);
		$conn->close();
		
		echo 'THÊM MỚI THÀNH CÔNG !';
	} 
	else // Chưa đăng nhập
	{    
		return;
	}
?> 
<br><a href="dt_quanly.php">Trở Về</a>