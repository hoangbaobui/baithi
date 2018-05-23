<!DOCTYPE html>
<html>
<body>
<form action="dt_sua.php" method="get">
	Mã Điện Thoại:<br>
	<input type="text" name="iddt" value="<?php echo $_GET['iddt']; ?>" readonly><br>

	Tên Điện Thoại<br>
	<input type="text" name="tendt" value="<?php echo $_GET['tendt']; ?>"><br>

	Giá Niêm Yết<br>
	<input type="text" name="gianiemyet" value="<?php echo $_GET['gianiemyet']; ?>"><br>

	Giá KM<br>
	<input type="text" name="giakm" value="<?php echo $_GET['giakm']; ?>"><br>

	Số Lượng<br>
	<input type="text" name="soluong" value="<?php echo $_GET['soluong']; ?>"><br>
	
	Hình Ảnh<br>
	<input type="text" name="hinhanh" value="<?php echo $_GET['hinhanh']; ?>"><br>
	<input type="submit" value="Cập Nhật">
</form> 
</body>
</html>