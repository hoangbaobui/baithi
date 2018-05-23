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

		$sql = "DELETE FROM chitietdt
				WHERE IDDT='".$_GET['iddt']."'";
		$result = $conn->query($sql);
		$conn->close();
		
		echo 'XÓA ĐIỆN THOẠI '. $_GET['tendt'].' THÀNH CÔNG !';
	} 
	else // Chưa đăng nhập
	{    
		return;
	}
?> 
<br><a href="dt_quanly.php">Trở Về</a>