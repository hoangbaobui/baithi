<?php
// Khởi chạy Session
session_start();

// Đămg nhập thành công
if (isset( $_SESSION['taikhoan'] ) ) 
{    
	echo 'Hello, '.$_SESSION['taikhoan'];
} 
else // Chưa đăng nhập
{    
    echo 'Chưa đăng nhập';
}
?>