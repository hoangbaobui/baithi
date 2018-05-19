<?php
	// Khoi chay Session
	session_start();

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

		$sql = "UPDATE dienthoai
				SET TENDT = '".$_GET['tendt']."'
				WHERE MADT='".$_GET['madt']."'";
		$result = $conn->query($sql);
		$conn->close();
		
		echo 'CẬP NHẬT THÀNH CÔNG !';
	} 
	else // Chưa đăng nhập
	{    
		return;
	}
?> 