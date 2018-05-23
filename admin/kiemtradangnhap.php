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
			FROM account WHERE taikhoan = '".$_GET['taikhoan']."'
			AND matkhau ='".$_GET['matkhau']."'";
	$result = $conn->query($sql);
	$ktrataikhoan = mysqli_num_rows($result);
		
	if($ktrataikhoan > 0)
	{
		$_SESSION['taikhoan'] = $_GET['taikhoan'];
		 header('Location: hangdt_quanly.php');
		//header("Location: http://bhbao96.byethost33.com/admin/quanlydt.php");
	}
	else
	{
		echo 'Đăng nhập thất bại. Vui lòng kiểm tra Tài khoản hoặc mật khẩu !!!';
	}
	$conn->close();
?>