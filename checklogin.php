<?php 
    session_start();
    if(isset($_POST['m_username'])){
            //connection
              include("condb.php");
            //รับค่า user & password
              $m_username = $_POST['m_username'];
              $m_pass = $_POST['m_pass'];
            //query 
              $sql="SELECT * FROM tb_member WHERE m_username='".$m_username."' AND m_pass='".$m_pass."' ";

              //echo $sql;

              //exit;

              $result = mysqli_query($con,$sql);

              //echo mysqli_num_rows($result);

              //exit;
            
              if(mysqli_num_rows($result)==1){

                  $row = mysqli_fetch_array($result);

                  $_SESSION["m_id"] = $row["m_id"];
                  $_SESSION["m_username"] = $row["m_username"];
                  $_SESSION["m_level"] = $row["m_level"];

                  if($_SESSION["m_level"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                    //echo 'R U Admin';
                    Header("Location: admin.php");

                  }

                  if ($_SESSION["m_level"]=="member"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                    
                    //echo 'R U Member';
                    Header("Location: user.php");

                  }

              }else{
                echo "<script>";
                    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                    echo "window.history.back()";
                echo "</script>";

              }

    }else{


         Header("Location: login.php"); //user & password incorrect back to login again

    }
?>