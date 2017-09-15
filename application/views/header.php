<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ทดสอบการอับโหลดไฟล์ HN</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('vendor/morrisjs/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/datepicker/datepicker3.css')?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/daterangepicker/daterangepicker.css')?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/animate.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/flat/blue.css')?>">
    <!-- jQuery -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js')?>"></script>

    <script language="JavaScript">
    	function fncShow(ctrl){ // ฟังก์ชั่นสำหรับ แสดง (Show) ส่งค่า id ของ DIV หรือ Table TD TR
    		document.getElementById(ctrl).style.display = ''; //สั่งให้แสดง
    		document.getElementById('embed_button').innerHTML ='<input type="submit" name="Submit" value="ปิด/เปิด แถบเพิ่มรูปภาพ" onClick="JavaScript:fncHide(\'embed_div\');" class="btn btn-primary pull-right ">'; // หลังจากสั่งให้แสดงเสร็จ ก็ทำการเปลี่ยนสถานะของปุ่มเป็น "ซ่อน"
    	}

    	function fncHide(ctrl){ // ฟังก์ชั่นสำหรับ ซ่อน ส่งค่า id ของ DIV หรือ Table TD TR
    		document.getElementById(ctrl).style.display = 'none'; //สั่งให้แสดง
    		document.getElementById('embed_button').innerHTML ='<input type="submit" name="Submit" value="เพิ่มรูปภาพ" onClick="JavaScript:fncShow(\'embed_div\');" class="btn btn-primary pull-right ">';  // หลังจากสั่งให้ซ่อนแล้ว ก็ทำการเปลี่ยนสถานะของปุ่มเป็น "แสดง"
    	}
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('vendor/metisMenu/metisMenu.min.js')?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('vendor/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('vendor/morrisjs/morris.js')?>"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('dist/js/sb-admin-2.js')?>"></script>

    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url('plugins/daterangepicker/daterangepicker.js')?>"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('plugins/datepicker/bootstrap-datepicker.js')?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('home'); ?>">ทดสอบระบบอับโหลดไฟล์ HN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown" style="display:none;">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li style="display:none;">
                            <a href="<?php echo site_url('home'); ?>"><i class="fa fa-credit-card fa-fw"></i> ชนิด OPD Card</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-alt  fa-fw"></i> ชนิด OPD Card<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url('home/addopdcard'); ?>"><i class="fa fa-download fa-fw"></i> เพิ่มไฟล์อับโหลด</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Order form</a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#"><i class="fa fa-minus fa-fw"></i>เลือกดูไฟล์</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-minus fa-fw"></i>แก้ไข/ลบ</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Graphic Note</a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#"><i class="fa fa-minus fa-fw"></i>เลือกดูไฟล์</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-minus fa-fw"></i>แก้ไข/ลบ</a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Admission Note</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Progress Note</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Consultation Report</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Operative Record</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Anesthesia Record</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> X-ray, CT Scan</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Laboratory : Biochemistry Hematology, Blood Transfusion,Bacteriology, Other</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Lab summary</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Pathologic Report</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> E.K.G.</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Accident Report</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Peoperative check list</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Consent form</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> Discharge Summary</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-plus fa-fw"></i> General In-Patient Summary</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
