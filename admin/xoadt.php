<?php
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

		$sql = "DELETE FROM dienthoai
				WHERE MADT='".$_GET['iddt']."'";
		$result = $conn->query($sql);
		$conn->close();
		
		echo 'XÓA DÒNG ĐIỆN THOẠI '. $_GET['iddt'].' THÀNH CÔNG !';
	} 
	else // Chưa đăng nhập
	{    
		return;
	}
?> 