<?php
	// Khoi chay Session
	session_start();

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

	$sql = "SELECT *
			FROM account WHERE taikhoan = '".$_GET['taikhoan']."'
			AND matkhau ='".$_GET['matkhau']."'";
	$result = $conn->query($sql);
	$soluongtimkiem = mysqli_num_rows($result);
		
	if($soluongtimkiem > 0)
	{
		$_SESSION['taikhoan'] = $_GET['taikhoan'];
		header("Location: http://bhbao96.byethost33.com/admin/quanlydt.php");
	}
	else
	{
		echo 'Đăng nhập thất bại. Vui lòng kiểm tra Tài khoản hoặc mật khẩu !!!';
	}
	$conn->close();
?>
