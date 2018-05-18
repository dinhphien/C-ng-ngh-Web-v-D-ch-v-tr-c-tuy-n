<?php
require_once (__DIR__."/../../models/taikhoan.php");
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>TKTP Shop Admin</title>

    <meta name="robots" content="noindex, nofollow" />

    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="crown/css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/css.css" media="screen" />


    <script type="text/javascript">
        var admin_url 	= '';
        var base_url 	= '';
        var public_url 	= '';
    </script>

<!--    <script type="text/javascript" src="../js/jquery/jquery.min.js"></script>-->
    <script type="text/javascript" src="crown/js/jquery.min.js"></script>
<!--    <script type="text/javascript" src="crown/js/jquery-migrate-3.0.0.js"></script>-->

<!--    <script type="text/javascript" src="../js/jquery/jquery-ui.min.js"></script>-->

    <script type="text/javascript" src="crown/js/plugins/spinner/jquery.mousewheel.js"></script>

<!--    <script type="text/javascript" src="crown/js/plugins/forms/uniform.js"></script>-->
    <script type="text/javascript" src="crown/js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="crown/js/plugins/forms/autogrowtextarea.js"></script>
<!--    <script type="text/javascript" src="crown/js/plugins/forms/jquery.maskedinput.min.js"></script>-->
    <script type="text/javascript" src="crown/js/plugins/forms/jquery.inputlimiter.min.js"></script>

    <script type="text/javascript" src="crown/js/plugins/tables/datatable.js"></script>
    <script type="text/javascript" src="crown/js/plugins/tables/tablesort.min.js"></script>
<!--    <script type="text/javascript" src="crown/js/plugins/tables/resizable.min.js"></script>-->

    <script type="text/javascript" src="crown/js/plugins/ui/jquery.tipsy.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.progress.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.breadcrumbs.js"></script>
    <script type="text/javascript" src="crown/js/plugins/ui/jquery.sourcerer.js"></script>

<!--    <script type="text/javascript" src="crown/js/custom.js"></script>-->


<!--    <script type="text/javascript" src="crown/js/ckeditor/ckeditor.js"></script>-->
<!--    <script type="text/javascript" src="../js/jquery/chosen/chosen.jquery.min.js"></script>-->
<!--    <script type="text/javascript" src="../js/jquery/scrollTo/jquery.scrollTo.js"></script>-->
<!--    <script type="text/javascript" src="../js/jquery/number/jquery.number.min.js"></script>-->
<!--    <script type="text/javascript" src="../js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js"></script>-->
<!--    <script type="text/javascript" src="../js/jquery/zclip/jquery.zclip.js"></script>-->
<!---->
<!--    <script type="text/javascript" src="../js/jquery/colorbox/jquery.colorbox.js"></script>-->
<!--    <link rel="stylesheet" type="text/css" href="../js/jquery/colorbox/colorbox.css" media="screen" />-->
<!---->
<!--    <script  src="../js/custom_admin.js" type="text/javascript"></script>-->
</head>

<body>

<!-- Left side content -->
<div id="left_content">
    <div id="leftSide" style="padding-top:30px;">

        <!-- Account panel -->

        <div class="sideProfile">
            <a href="#" title="" class="profileFace"><img width="40" src="images/user.png" /></a>
<!--            <span>Xin chào: <strong>Admin</strong></span>-->
            <span>Tài khoản: <?php if(isset($_SESSION['logged_admin']))echo $_SESSION['logged_admin']->getTentaikhoan(); ?></span>
            <span>Vai trò : Admin</span>
            <div class="clear"></div>
        </div>
        <div class="sidebarSep"></div>
        <!-- Left navigation -->

        <ul id="menu" class="nav">

            <li class="home">

                <a href="#" class="active" id="current">
                    <span>Bảng điều khiển</span>
                    <strong></strong>
                </a>


            </li>
            <li class="tran">

                <a href="#" class=" exp" >
                    <span>Quản lý bán hàng</span>
                </a>

                <ul class="sub">
<!--                    <li >-->
<!--                        <a href="admin/tran.html">-->
<!--                            Giao dịch							</a>-->
<!--                    </li>-->
                    <li >
                        <a href="route_admin.php?controller=controller_donhang&action=show_dh">
                            Đơn hàng sản phẩm							</a>
                    </li>
                </ul>

            </li>
            <li class="product">

                <a href="product.php" class=" exp" >
                    <span>Sản phẩm</span>
                </a>

                <ul class="sub">
                    <li >
                        <a href="route_admin.php?controller=controller_sanpham&action=showSP_all">
                            Thống kê Sản phẩm							</a>
                    </li>
                    <li >
                        <a href="form.php">
                            Thêm mới sản phẩm							</a>
                    </li>
                </ul>

            </li>
            <li class="account">

                <a href="admin/account.html" class=" exp" >
                    <span>Tài khoản</span>
                </a>

                <ul class="sub">
                    <li >
                        <a href="update_account_admin.php">
                            Cập nhật tài khoản							</a>
                    </li>
                    <li id="logout_header_admin" >
                        <a href="" >Đăng Xuất</a>
                    </li>
<!--                    <li >-->
<!--                        <a href="admin/user.html">-->
<!--                            Thành viên							</a>-->
<!--                    </li>-->
                </ul>

            </li>
            <li class="content">

                <a href="admin/content.html" class=" exp" >
                    <span>Nội dung</span>
                </a>

                <ul class="sub">
<!--                    <li >-->
<!--                        <a href="admin/slide.html">-->
<!--                            Slide							</a>-->
<!--                    </li>-->
<!--                    <li >-->
<!--                        <a href="admin/news.html">-->
<!--                            Tin tức							</a>-->
<!--                    </li>-->
                    <li >
                        <a href="route_admin.php?controller=controller_tintuc&action=showTTadmin">
                            Trang thông tin							</a>
                    </li>
                    <li >
                        <a href="add_news.php">
                            Thêm tin tức							</a>
                    </li>
                </ul>

            </li>

        </ul>

    </div>
    <div class="clear"></div>
</div>


<!-- Right side -->
<div id="rightSide">

    <!-- Account panel top -->

    <div class="topNav">
        <div class="wrapper">
<!--            <div class="welcome">-->
<!--                <span>Xin chào: <b>Admin</b></span>-->
<!--            </div>-->

<!--            <div class="userNav">-->
<!--                <ul>-->
<!--                    <li><a href="" target="_blank">-->
<!--                            <img style="margin-top:7px;" src="images/icons/light/home.png" />-->
<!--                            <span>Cập nhật tài khoản</span>-->
<!--                        </a></li>-->

                    <!-- Logout -->
<!--                    <li><a href="admin/home/logout.html">-->
<!--                            <img src="images/icons/topnav/logout.png" alt="" />-->
<!--                            <span>Đăng xuất</span>-->
<!--                        </a></li>-->

<!--                </ul>-->
<!--            </div>-->

            <div class="clear"></div>
        </div>
    </div>

    <!-- Title area -->
<!--    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Phản hồi</h5>
                <span>Quản lý phản hồi</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>-->

    <script src="crown/js/header_admin.js"></script>
