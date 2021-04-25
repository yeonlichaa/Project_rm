<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// exit();

//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$m_id = $_POST["m_id"];
$m_username = $_POST["m_username"];
$m_fname = $_POST["m_fname"];
$m_lname = $_POST["m_lname"];
$m_level = $_POST["m_level"];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 

$sql = "UPDATE tb_member SET
      m_username = '$m_username',
      m_fname = '$m_fname',
      m_lname = '$m_lname' ,
      m_level = '$m_level'
      WHERE m_id = '$m_id' ";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

// echo $sql;
// exit;

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ($result) {
    echo "<script type='text/javascript'>";
    echo "alert('Update');";
    echo "window.location = 'Manage_data.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
}
?>