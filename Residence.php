<?php 
session_start();
//cho '<pre>';
//print_r($_SESSION);
//echo '<pre>';

include('condb.php');

//สร้างตัวแปรจาก session
$m_id = $_SESSION['m_id'];
$m_username = $_SESSION['m_username'];
$m_level = $_SESSION['m_level'];

//echo $m_id;
//echo '<br>';
//echo $m_username;
//echo '<br>';
//echo $m_level;

//สร้างเงื่อนไขการตรวจสอบสิทธิ์ user
if($m_level != 'member'){
    Header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/4426-removebg-preview.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ระบบคำนวณภาษีที่ดิน
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php">
          ระบบคำนวณภาษีที่ดิน </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">account_circle</i> เข้าสู่ระบบ
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="login.php" class="dropdown-item">
                <i class="material-icons">login</i> Sign in
              </a>
              <a href="register.php" class="dropdown-item">
                <i class="material-icons">content_paste</i> Sign up
              </a>
            </div>
          </li> 
          <!-- <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> คำนวณภาษีที่ดิน
            </a>
          </li> -->
          <li class="nav-item">
           <!-- <a class="nav-link" href="login.php" target="_blank">
              <i class="material-icons">unarchive</i>สวัสดี คุณ <?php echo $m_username; ?>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>ยินดีต้อนรับ</h1>
            <h3>เข้าสู่ระบบคำนวณภาษีที่ดินจากแผนที่กรมที่ดิน</h3>
            <a href="Guest_user_cal.php"><h2><button class="btn btn-success waves-effect waves-light">คำนวณภาษีที่ดิน</button></h2></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="title">
          <h2>คำนวณภาษีที่ดิน</h2>
        </div>
        <!--  buttons -->
        <div class="cd-section">
          <div class="title">
            เลือกประเภทที่ดินที่จะคำนวณ
          </div>
          <a href="Residence1.php"><button class="btn btn-primary waves-effect waves-light">ที่อยู่อาศัย(เป็นเจ้าของที่ดินและสิ่งปลูกสร้าง)</button></a>
          <a href="Residence2.php"><button class="btn btn-success waves-effect waves-light">ที่อยู่อาศัย(เป็นเจ้าของเฉพาะสิ่งปลูกสร้าง)</button></a>
          <a href="Residence3.php"><button class="btn btn-warning waves-effect waves-light">ที่อยู่อาศัย(บ้านหลังอื่นๆ)</button></a>
        </div>
        <div>
            <a href="Guest_user_cal.php"><button class="btn btn-danger waves-effect waves-light">ย้อนกลับ</button></a>
        </div>
        <!--                 end buttons		         -->
      </div>
    </div>

  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <!--<li>
            <a href="https://www.creative-tim.com/">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/blog">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li> -->
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>