<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cuahangdienthoai";
	
	
	echo $_GET['id'];
	
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT IDDT, TENDT, MOTA, GIANIEMYET, GIAKM, SOLUONG, MADT, HINHANH 
			FROM chitietdt";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		//echo "TEN: " . $row["TENDT"]. " GIA Niem Yet: " . $row["GIANIEMYET"]. "<br>";
	}
	}
	$conn->close();
?> 