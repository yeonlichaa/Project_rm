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

//สร้างเงื่อนไขการตรวจสอบสิทธิ์ admin
if($m_level != 'admin'){
    Header("Location: logout.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ระบบคำนวณภาษีที่ดิน</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/icon/4426-removebg-preview.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="admin.php">
                            ระบบคำนวณภาษีที่ดินจากแผนที่กรมที่ดิน
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <!-- <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a> -->
                                <!-- <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul> -->
                           <!-- </li> -->
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <!-- <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                    <span>Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="login.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?');">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <!-- <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image"> -->
                                    <div class="user-details">
                                        <span id="more-details">Admin<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?');"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <!-- <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label> 
                                    </div> -->
                                </form>
                            </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="admin.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">หน้าแรก</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- <div class="pcoded-navigation-label">UI Element</div> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">คำนวณภาษีที่ดิน</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="ad_Residence.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ที่อยู่อาศัย</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ad_Agriculture.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">เกษตรกรรม</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ad_Industry.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">อุตสาหกรรม</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ad_Wasteland.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">ที่ดินรกร้าง</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- <div class="pcoded-navigation-label">Tables</div> -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="Manage_data.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">จัดการข้อมูลสมาชิกและแอดมิน</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <!--<div class="pcoded-navigation-label">Pages</div>-->
                            <!--<ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Pages</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="login.php" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="sample-page.html" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                                                <span class="pcoded-mtext">Sample Page</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">หน้าแรก</h5>
                                            <p class="m-b-0">ยินดีต้อนรับเข้าสู่ ระบบคำนวณภาษีที่ดินจากแผนที่กรมที่ดิน </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="admin.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">หน้าแรก</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
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
                                        </div>
                                    </div> 
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- slimscroll js -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>

    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js "></script>

    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
