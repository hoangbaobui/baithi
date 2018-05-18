<!DOCTYPE html>
<html>
<body>
<form action="suadt.php" method="get">
  Mã Điện Thoại:<br>
  <input type="text" name="madt" value="<?php echo $_GET['iddt']; ?>" readonly>
  <br>
  Tên Điện Thoại<br>
  <input type="text" name="tendt" value="<?php echo $_GET['tendt']; ?>">
  <input type="submit" value="Cập Nhật">
</form> 
</body>
</html>