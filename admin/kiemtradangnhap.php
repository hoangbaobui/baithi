<?php
	// Khoi chay Session
	session_start();

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

	$sql = "SELECT *
			FROM ACCOUNT WHERE TAIKHOAN = '".$_GET['taikhoan']."'
			AND MATKHAU ='".$_GET['matkhau']."'";
	$result = $conn->query($sql);
	$soluongtimkiem = mysqli_num_rows($result);
		
	if($soluongtimkiem > 0)
	{
		$_SESSION['taikhoan'] = $_GET['taikhoan'];
		header("Location: http://localhost/baithi/admin/quanlydt.php");
	}
	else
	{
		echo 'Đăng nhập thất bại. Vui lòng kiểm tra Tài khoản hoặc mật khẩu !!!';
	}
	$conn->close();
?>