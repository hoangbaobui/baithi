<?php
	// Đăng nhập thành công
	if (isset( $_SESSION['taikhoan'] ) ) 
	{    
		$servername = "sql206.byethost33.com";
		$username = "b33_22096513";
		$password = "r8c9325n";
		$dbname = "b33_22096513_cuahangdienthoai";
		
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO dienthoai (MADT, TENDT)
				VALUES ('".$_GET['madt']."', '".$_GET['tendt']."')";
		$result = $conn->query($sql);
		$conn->close();
		
		echo 'THÊM MỚI THÀNH CÔNG !';
	} 
	else // Chưa đăng nhập
	{    
		return;
	}
?> 