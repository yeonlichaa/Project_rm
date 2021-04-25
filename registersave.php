<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$m_username = $_POST["m_username"];
	$m_fname = $_POST["m_fname"];
	$m_lname = $_POST["m_lname"];
	$m_pass = $_POST["m_pass"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO tb_member(m_username, m_fname, m_lname, m_pass)
			 VALUES('$m_username', '$m_fname', '$m_lname', '$m_pass')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = 'register.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>