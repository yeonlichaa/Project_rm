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
        <a class="navbar-brand" href="user.php">
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
              <i class="material-icons">account_circle</i> สวัสดี คุณ <?php echo $m_username; ?>
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="index.php" class="dropdown-item" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?');">
                <i class="material-icons">logout</i> log out
              </a>
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> คำนวณภาษีที่ดิน
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">
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
            <a href="cal.php"><h2><button class="btn btn-success waves-effect waves-light">คำนวณภาษีที่ดิน</button></h2></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section section-basic">
      <div class="container">
        <div class="title">
          <h2>มารู้จัก "ภาษีที่ดินและสิ่งที่ปลูกสร้าง" คืออะไร</h2>
        </div>
        <!--  buttons -->
        <div class="cd-section">
          <div class="title">
            <h4>“ภาษีที่ดินและสิ่งปลูกสร้าง” คืออัตราการเก็บภาษีจากการเข้าทำประโยชน์บนที่ดิน เพื่อกระตุ้นให้เกิดการใช้ประโยชน์ในที่ดิน และปรับปรุงปัญหาการจัดเก็บภาษีที่ดินในท้องถิ่นให้มีความทันสมัย โดยมีผลบังคับตั้งแต่ 13 มีนาคม 2562 และเริ่มจัดเก็บภาษีที่ดินและสิ่งปลูกสร้างตั้งแต่ 1 มกราคม 2563 เป็นครั้งแรก<br>
              <!-- <small>Pick your style</small> -->
            </h4>
          </div>
          <div><h4>ทำไมต้องจัดเก็บ “ภาษีที่ดินและสิ่งปลูกสร้าง”<br></h4></div>
          <img src="assets/img/ข้อมูลที่ดิน/Dtbezn3nNUxytg04acwv71KfnOT5p1d3818NTqaJQe4tYk.webp" class="col-md-8 ml-auto mr-auto">
          <div class="title">
            <h4>เนื่องจากภาษีบำรุงท้องที่ ภาษีโรงเรือน และที่ดิน มีสภาพปัญหาที่สั่งสมมานาน เช่น ฐานภาษีซ้ำซ้อนกับภาษีเงินได้, จัดเก็บในอัตราภาษีสูง และดุลยพินิจในการประเมินค่อนข้างสูง รวมถึงราคาปานกลางไม่มีการปรับมาเป็นเวลานาน มีการยกเว้นลดหย่อนจำนวนมาก จึงนำไปสู่การปฏิรูปโครงสร้างระบบภาษีให้มีความทันสมัยเช่นเดียวกับนานาประเทศ และแก้ไขปัญหาโครงสร้างภาษีเดิม และมีวัตถุประสงค์ดังนี้<br>
            </h4>
          </div>
          <div><h4>- เพิ่มความเป็นอิสระและเพิ่มประสิทธิภาพการจัดเก็บภาษีให้องค์กรปกครองส่วนท้องถิ่น (อปท.)<br></h4></div>
          <div><h4>- สร้างความเข้มแข็งและโปร่งใสในการบริหารการคลังของ อปท.<br></h4></div>
          <div><h4>- ช่วยให้ท้องถิ่นมีงบประมาณเพียงพอในการพัฒนาพื้นที่ให้เกิดความเจริญในระยะยาว<br></h4></div>
          <div class="title">
            <h4>ประเภทที่ดินและสิ่งปลูกสร้าง<br></h4>
          </div>
          <img src="assets/img/ข้อมูลที่ดิน/ที่ดินปลูกสร้าง.webp" class="col-md-8 ml-auto mr-auto">
          <div class="title">
            <h4>การจัดเก็บภาษีที่ดินและสิ่งปลูกสร้างนั้น ขึ้นอยู่กับการเข้าทำประโยชน์บนที่ดิน โดยแบ่งประเภทออกเป็นที่ดินใช้ประโยชน์ และไม่ได้ใช้ประโยชน์ ดังนี้<br>
            </h4>
          </div>
          <div><h4>ที่อยู่อาศัย<br>
            ถือเป็นที่ดินใช้ประโยชน์ ผู้เสียภาษีคือเจ้าของบ้านหลังหลักคือผู้ที่มีชื่อบนโฉนดและทะเบียนบ้าน โดยไม่จำเป็นต้องเป็นเจ้าบ้าน ส่วนบ้านหลังอื่นๆ ใช้ชื่อเจ้าของบ้านที่มีชื่อในโฉนด แต่ไม่มีชื่อในทะเบียนบ้านก็ได้</h4></div>
          <div><h4>ที่อยู่อาศัยสำหรับใช้ประโยชน์อื่นๆ<br>
            กรณีเป็นอาคารที่ใช้ประโยชน์อื่นๆ ได้แก่ พาณิชยกรรม, อุตสาหกรรม, อาคารสำนักงาน, โรงแรม, ร้านอาหาร ฯลฯ</h4></div>
          <div><h4>ที่ดินรกร้าง ไม่ได้ใช้ประโยชน์<br>
            กรณีเป็นที่ดินที่ทิ้งรกร้างว่างเปล่า ไม่ได้ใช้ทำประโยชน์ในปีก่อนหน้า ยกเว้นว่าจะมีกฎหมายห้ามหรือให้ทิ้งไว้เพื่อการเกษตร หรือปล่อยไว้เพื่อใช้ในการพัฒนาโครงการ</h4></div>
          <div class="title">
            <h3>อัตราภาษีที่ดินและสิ่งปลูกสร้าง 2564</h3>
          </div>
          <div class="title">
            <h4>เมื่อวันที่ 26 มกราคม 2564 นายอาคม เติมพิทยาไพสิฐ รัฐมนตรีว่าการกระทรวงการคลัง ได้เปิดเผยมาตรการลดภาษีที่ดินและสิ่งปลูกสร้างในปี พ.ศ. 2564 อันเนื่องมาจากผลกระทบจากการแพร่ระบาดของโควิด-19 โดยลดภาษีในอัตราร้อยละ 90 ของจำนวนภาษีที่คำนวณได้สำหรับการจัดเก็บภาษีของปีภาษี พ.ศ. 2564</h4>
          </div>
          <div class="title">
            <h4>อัตราภาษีที่ดินและสิ่งปลูกสร้างสำหรับบ้านพักและที่อยู่อาศัย มีอัตราเพดานอยู่ที่ 0.3% พื้นที่เกษตรกรรมมีอัตราเพดานจัดเก็บ 0.15% และพื้นที่รกร้างมีอัตราเพดานอยู่ที่ 1.2% โดยมีอัตราจัดเก็บ ดังนี้</h4>
          </div>
          <div><h4>ที่ดินเกษตรกรรม<br>
            มูลค่า 0-75 ล้านบาท อัตราภาษี 0.01<br>
            มูลค่า 75-100 ล้านบาท อัตราภาษี 0.03<br>
            มูลค่า 100-500 ล้านบาท อัตราภาษี 0.05<br>
            มูลค่า 500-1,000 ล้านบาท อัตราภาษี 0.07<br>
            มูลค่า 1,000 ล้านบาทขึ้นไป อัตราภาษี 0.01</h4></div>
          <div><h4>บุคคลธรรมดาได้รับยกเว้น อปท. ละไม่เกิน 50 ล้านบาท และมีภาระภาษีดังนี้<br>
            มูลค่า 50 ล้านบาท ค่าภาษี 0 บาท<br>
            มูลค่า 100 ล้านบาท ค่าภาษี 5,000 บาท<br>
            มูลค่า 200 ล้านบาท ค่าภาษี 40,000 บาท<br></h4></div>
          <div><h4>บ้านหลังหลัก<br>
            มูลค่า 0-10 ล้านบาท ได้รับการยกเว้นภาษี<br>
            10-50 ล้านบาท อัตราภาษี 0.02<br>
            50-75 ล้านบาท อัตราภาษี 0.03<br>
            75-100 ล้านบาท อัตราภาษี 0.05<br>
            100 ล้านบาทขึ้นไป อัตราภาษี 0.1</h4>
          </div> 
          <div><h4>บ้านหลังหลัก และที่ดิน<br>
            มูลค่า 0-10 ล้านบาท ได้รับการยกเว้นภาษี<br>
            10-50 ล้านบาท ได้รับการยกเว้นภาษี<br>
            50-75 ล้านบาท อัตราภาษี 0.03<br>
            75-100 ล้านบาท อัตราภาษี 0.05<br>
            100 ล้านบาทขึ้นไป อัตราภาษี 0.1</h4>
          </div>
          <div><h4>บ้านหลังอื่นๆ<br>
            มูลค่า 0-10 ล้านบาท อัตราภาษี 0.02<br>
            10-50 ล้านบาท อัตราภาษี 0.02<br>
            50-75 ล้านบาท อัตราภาษี 0.03<br>
            75-100 ล้านบาท อัตราภาษี 0.05<br>
            100 ล้านบาทขึ้นไป อัตราภาษี 0.1</h4>
          </div>  
          <div><h4>ภาระภาษี บ้านหลังหลัก<br>
            มูลค่า 50 ล้านบาท ภาระภาษี 0 บาท<br>
            100 ล้านบาท ภาระภาษี 20,000 บาท<br>
            200 ล้านบาท ภาระภาษี 120,000 บาท<br></h4>
          </div>  
          <div><h4>ภาระภาษี บ้านหลังอื่นๆ<br>
            มูลค่า 50 ล้านบาท ภาระภาษี 10,000 บาท<br>
            100 ล้านบาท ภาระภาษี 30,000 บาท<br>
            200 ล้านบาท ภาระภาษี 130,000 บาท<br></h4>
          </div> 
          <div><h4>อัตราภาษีที่รกร้างว่างเปล่าและอื่นๆ<br>
            มูลค่า 0-50 ล้านบาท อัตราภาษี 0.3<br>
            50-200 ล้านบาท อัตราภาษี 0.4<br>
            200-1,000 ล้านบาท อัตราภาษี 0.5<br>
            1,000-5,000 ล้านบาท อัตราภาษี 0.6<br>
            5,000 ล้านบาทขึ้นไป อัตราภาษี 0.7</h4>
          </div>   
          <div><h4>ภาระภาษี ที่รกร้างว่างเปล่าและอื่นๆ<br>
            มูลค่า 50 ล้านบาท ภาระภาษี 150,000 บาท<br>
            100 ล้านบาท ภาระภาษี 350,000 บาท<br>
            200 ล้านบาท ภาระภาษี 750,000 บาท<br>
            1,000 ล้านบาท ภาระภาษี 4,750,000 บาท<br></h4>
          </div>
          <div><h4>**ที่รกร้างว่างเปล่าเพิ่มอัตรา 0.3% ทุกปี แต่อัตราภาษีรวมไม่เกิน 3%<br></h4>
          </div>
          <div class="title">
            <h3>ขั้นตอนสำหรับผู้เสียภาษีที่ดินและสิ่งปลูกสร้าง</h3>
          </div>
          <img src="assets/img/ข้อมูลที่ดิน/สร้าง.webp" class="col-md-8 ml-auto mr-auto">
          <div class="title"><h4>1. ตรวจสอบบัญชีรายการที่ดินและสิ่งปลูกสร้าง ได้แก่ ประเภท, ขนาด และการใช้ประโยชน์ และยื่นแก้ไขท้องถิ่นได้ทันทีหากข้อมูลไม่ถูกต้อง<br>
            2. ตรวจสอบแบบแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้าง ได้แก่ ประเภท, ขนาด, ราคาประเมิน, อัตราภาษี, การใช้ประโยชน์ และค่าภาษี หากประเมินไม่ถูกต้อง ต้องยื่นคัดค้านและอุทธรณ์<br>
            3. ชำระภาษีที่ดินและสิ่งปลูกสร้างภายในระยะเวลาที่กำหนด <br></h4>
          </div>
          <div class="title">
            <h3>ภาษีที่ดินและสิ่งปลูกสร้าง จ่ายออนไลน์ได้ไหม</h3>
          </div>
          <div>
            <h4>เมื่อคุณได้แบบประเมิน ภ.ด.ส. 10 แล้ว หากไม่ได้คัดค้านค่าใช้จ่าย ก็เข้าสู่กระบวนการชำระภาษีตามเอกสารที่ได้มา โดยสามารถชำระได้ 4 ช่องทาง รวมการจ่ายออนไลน์ผ่านแอปธนาคาร วิธีการชำระภาษีที่ดินและสิ่งปลูกสร้าง มีดังนี้</h4>
          </div>
          <div><h4>1. กรุงเทพมหานครชำระที่สำนักงานเขต และต่างจังหวัดชำระที่หน่วยงานที่ระบุตามจดหมายแจ้งภาษีที่ดินและสิ่งปลูกสร้างที่ท่านได้รับ<br>
            2. เคาน์เตอร์ธนาคารกรุงไทย ทุกสาขา<br>
            3. Internet Banking ทุกธนาคาร<br>
            4. Mobile Banking ทุกธนาคาร<br></h4>
          </div>
          <div>
            <h4>หากชำระภาษีเกินระยะเวลาที่กำหนดในหนังสือแจ้งเตือน ก็ยังชำระได้แต่ต้องเสียเบี้ยปรับ เพราะฉะนั้นหากได้รับหนังสือแจ้งเตือนเสียภาษีต้องรีบตรวจสอบข้อมูลให้ถูกต้อง หากไม่ถูกต้องต้องนำหนังสือไปแจ้งคัดค้าน เพื่อจะได้ชำระภาษีได้ครบถ้วน ไม่ถูกปรับในภายหลัง</h4>
          </div>
          <div>
            <h4>ที่มา: <a href="http://www.fpo.go.th/main/getattachment/General-information-public-service/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%8A%E0%B8%B2%E0%B8%8A%E0%B8%99%E0%B8%84%E0%B8%A7%E0%B8%A3%E0%B8%A3%E0%B8%B9%E0%B9%89/%E0%B8%A0%E0%B8%B2%E0%B8%A9%E0%B8%B5%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%AA%E0%B8%B4%E0%B9%88%E0%B8%87%E0%B8%9B%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87/(Short-New)Land_Building-tax.pdf.aspx?lang=th-TH">สำนึกงานเศรษฐกิจการคลัง กระทรวงการคลัง</a></h4>
          </div>
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