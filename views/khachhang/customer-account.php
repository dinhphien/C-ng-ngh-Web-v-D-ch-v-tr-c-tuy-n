<?php  include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a>
                        </li>
                        <li><a href="customer-account.php">Tài khoản</a></li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Tài khoản của tôi</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href=""><i class="fa fa-list"></i>Lịch sử đặt hàng</a>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-user"></i>Cập nhật tài khoản</a>
                                </li>
                                <li>
                                    <a href="" id="logout_customer_account"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Cập nhật tài khoản</h1>
                        <h3>Thay đổi mật khẩu</h3>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Mật khẩu cũ</label>
                                        <input type="password" class="form-control" id="password_old">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">Mật khẩu mới</label>
                                        <input type="password" class="form-control" id="password_new_1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Nhập lại mật khẩu mới</label>
                                        <input type="password" class="form-control" id="password_new_2">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </form>
                        <div class="col-sm-12 text-center">
                            <button id="button_luu_mk" class="btn btn-primary"><i class="fa fa-save"></i>Lưu mật khẩu mới</button>
                        </div>

                        <hr>

                        <h3>Cập nhật thông tin khách hàng</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Tên khách hàng</label>
                                        <input type="text" class="form-control" id="fullname_change">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email_change">
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone_change">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Địa chỉ</label>
                                        <input type="text" class="form-control" id="address_change">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-sm-12 text-center">
                            <button id="button_thaydoi_thongtin" class="btn btn-primary"><i class="fa fa-save"></i>Lưu thay đổi</button>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>
    <!-- /#all -->
</body>

</html>
<?php include 'footer.php' ?>
<script src="js/customer_account.js"></script>
