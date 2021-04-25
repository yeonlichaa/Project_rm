<!DOCTYPE html>
<html lang="en">

<head>
    <title>คำนวณทีดินประเภทเกษตรกรรม</title>
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
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
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
                            
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <!--<img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">-->
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
                                        <a href="login.php">
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
                                            <a href="login.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                </form>
                            </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="admin.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext">หน้าแรก</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
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
                                        <li class="active ">
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
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="Manage_data.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext">จัดการข้อมูลสมาชิกและแอดมิน</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <!-- <ul class="pcoded-item pcoded-left-item">
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
                                            <h5 class="m-b-10">คำนวณภาษีที่ดิน</h5>
                                            <p class="m-b-0">ยินดีต้อนรับเข้าสู่ ระบบคำนวณภาษีที่ดินจากแผนที่กรมที่ดิน</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="admin.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">คำนวณภาษีที่ดิน</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">เกษตรกรรม</a>
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
                                    
                                ใส่ขนาดที่ดิน <br>

                                
                            
<form>
    <input type="text" name="rai" id="rai" pattern="[0-9]{1,5}" title="กรุณาระบุไร่ ตั้งแต่ 0 แต่ไม่เกิน 99,999">ไร่ <!--รับขนาดไร่ -->
    <input type="text" name="ngan" id="ngan" pattern="[0-3]" title="กรุณาระบุงาน ตั้งแต่ 0 แต่ไม่เกิน 3">งาน 
    <input type="text" name="tarangwa" id="tarangwa" pattern="[0-9]{1,3}" title="กรุณาระบุตาราง.วา ตั้งแต่ 0 แต่ไม่เกิน 99.9">ตารางวา<br><br>
    
    ราคาประเมินต่อตารางวา<input type="text" name="values" id="values" pattern="[0-9]{1,}" >บาท <br><br>

    <button type="button" name="math" class="btn btn-primary">คำนวณ</button> <br>
    <!-- ขนาดที่ดิน <input type="text" name="sum" >ตารางวา<br><br>  ไร่ *4  + งาน * 100 -->
    ขนาดที่ดิน <p id="sum"></p><br><br>  <!--ไร่ *4  + งาน * 100-->

    
    
    <!-- มูลค่าที่ดิน <input type="text" name="valpramern" >บาท<br><br> -->
    มูลค่าที่ดิน <k id="landval"></k><br><br>
    
    <!-- ภาษีที่ต้องจ่าย <input type="text" name="resulttax" > บาท <br> -->
    ภาษีที่ต้องจ่าย :<div id="showtax"></div>
  
    <button onclick="document.getElementById('showtax').value = ''">Clear input field</button> <!--ยังไม่เสร็จ-->
    

    <script>
        var objK = document.getElementById("landval");
        var objDiv = document.getElementById("showtax");
        var objP = document.getElementById("sum");
       var button = document.querySelector("[name='math']");
        button.addEventListener("click",function(){
        var a = document.querySelector("[name='rai']").value;
        var b = document.querySelector("[name='ngan']").value;
        var c = document.querySelector("[name='tarangwa']").value;
        var d = document.querySelector("[name='values']").value;
            
        a = (isNaN(a) || a==="")?0:parseFloat(a);
        b = (isNaN(b) || b==="")?0:parseFloat(b);
        c = (isNaN(c) || c==="")?0:parseFloat(c);
        d = (isNaN(d) || d==="")?0:parseFloat(d);

    //    var a1 =String
    //         a1 = "not pending";

            // let a1 = "not pending";

        

        var shipping = (((a*4)+b)*100)+c;
        var shipping2 = shipping*d;

        objP.innerHTML = shipping + "ตารางวา";
        objK.innerText = shipping2 + "บาท";

        a1 = "not pending";
        a2 = ((shipping2 - 50000000)  * (0.0003))+2500;
        a3 = ((shipping2 - 75000000)  * (0.0005))+10000;
        a4 = ((shipping2 - 100000000) * (0.0007))+210000;
        a5 = ((shipping2 - 500000000) * (0.0007))+210000;


        if(shipping2 <= 50000000.00)
            objDiv.innerHTML = "ต้องเสียภาษีรายปีเป็นจำนสนเงิน "+a1 +"บาท";
        else if(shipping2<= 75000000)
            objDiv.innerHTML = "ต้องเสียภาษีรายปีเป็นจำนสนเงิน "+a2 +"บาท 0.03%" ;
        else if(shipping2 > 75000000 && shipping2 <= 100000000)
            objDiv.innerHTML = "ต้องเสียภาษีรายปีเป็นจำนสนเงิน "+a3 +"บาท 0.05%";
        else if(shipping2 > 100000000 && shipping2 <= 500000000)
            objDiv.innerHTML = "ต้องเสียภาษีรายปีเป็นจำนสนเงิน "+a4 +"บาท 0.07%";  
        else if(shipping2 > 500000000 && shipping2 <= 1000000000)
            objDiv.innerHTML = "ต้องเสียภาษีรายปีเป็นจำนสนเงิน "+a5 +"บาท";  


        
        
        // document.querySelector("[name='sum']").value = shipping.toFixed(2);
        // document.querySelector("[name='valpramern']").value = shipping2.toFixed(2);



         // document.querySelector("[name='resulttax']").value = a1.toFixed(2);
        });

        // function calculateGrade()
        // {
        // var g = document.getElementById("g").value;
        // var objDiv = document.getElementById("showGrade");

        // a1 = "not pending";
        // a2 = 5000;
        // a3 = 10;
        // a4 = (a2*5)+a3;

        
        // if(g >= 80)
        //     objDiv.innerHTML = "ได้เกรด A " + a4;
        // else if(g >= 70)
        //     objDiv.innerHTML = "ได้เกรด B";
        // else if(g >= 60)
        //     objDiv.innerHTML = "ได้เกรด C";
        // else if(g >= 50)
        //     objDiv.innerHTML = "ได้เกรด D";
        // else
        //     objDiv.innerHTML = "ได้เกรด F";
        // }


    </script>
    
    <!-- เกรด <input type="text" name="g" id="g">
    
    <input type="button" value="คำนวณเกรด" onclick="calculateGrade()"> -->
    <!-- <div id="showGrade"></div> -->


    <br>
    <!-- <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    
  </form>
                                </div>
                            </div>
                            <!-- Warning Section Starts -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
    <!-- Custom js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical/vertical-layout.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom js -->
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function() {
                    return $('#primary-popover-content').html();
                }
            });
        });
    </script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
