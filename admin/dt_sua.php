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

		$sql = "UPDATE chitietdt
				SET TENDT = '".$_GET['tendt']."',				
				    GIANIEMYET = ".$_GET['gianiemyet'].",			
				    GIAKM = ".$_GET['giakm'].",			
				    SOLUONG = ".$_GET['soluong'].",
					HINHANH = '".$_GET['hinhanh']."'
				WHERE IDDT='".$_GET['iddt']."'";
		$result = $conn->query($sql);
		$conn->close();
		
		echo 'CẬP NHẬT THÀNH CÔNG !';
	} 
	else // Chưa đăng nhập
	{    
		return;
	}
?>
<br><a href="dt_quanly.php">Trở Về</a>