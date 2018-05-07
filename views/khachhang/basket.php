<?php include 'header.php' ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Trang chủ</a>
                        </li>
                        <li><a href="basket.php">Giỏ hàng</a></li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="checkout1.html">

                            <h1>Giỏ hàng </h1>
                            <p class="text-muted">Bạn đang có 3 sản phẩm trong giỏ hàng</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Sản phẩm</th>
                                            <th>Số lượng </th>
                                            <th>Đơn giá (VNĐ)</th>
<!--                                            <th>Chiết khấu</th>-->
                                            <th colspan="2">Thành tiền (VNĐ)</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="img/detailsquare.jpg" alt="White Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">White Blouse Armani</a>
                                            </td>
                                            <td>
                                                <input type="number"min="1" value="2" class="form-control">
                                            </td>
                                            <td>$123.00000</td>
<!--                                            <td>$0.00</td>-->
                                            <td>$246.00000</td>
                                            <td><a class=""><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="img/basketsquare.jpg" alt="Black Blouse Armani">
                                                </a>
                                            </td>
                                            <td><a href="#">Black Blouse Armani</a>
                                            </td>
                                            <td>
                                                <input type="number" min="1" value="1" class="form-control">
                                            </td>
                                            <td>$200.0000</td>
<!--                                            <td>$0.00</td>-->
                                            <td>$200.0000</td>
                                            <td><a class=""><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Tổng cộng </th>
                                            <th colspan="2">$446.00</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nam" class="btn btn-default"><i class="fa fa-chevron-left"></i>Tiếp tục mua sắm</a>
                                </div>
                                <div class="pull-right">
                                    <button class="btn btn-default"><i class="fa fa-refresh"></i>Cập nhật giỏ hàng</button>
                                    <button type="submit" class="btn btn-primary">Thanh toán online <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Thông tin đơn hàng</h3>
                        </div>
                        <p class="text-muted">Hàng sẽ được giao trong vòng 7 ngày kể từ khi đặt hàng</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td> (Tạm tính) Giá sản phẩm </td>
                                        <th>446.000 VNĐ</th>
                                    </tr>
                                    <tr>
                                        <td>(Tạm tính) Phí vận chuyển</td>
                                        <th>30.000 VNĐ</th>
                                    </tr>
<!--                                    <tr>-->
<!--                                        <td>Tax</td>-->
<!--                                        <th>$0.00</th>-->
<!--                                    </tr>-->
                                    <tr class="total">
                                        <td>Tổng cộng</td>
                                        <th>456.000 VNĐ</th>
                                    </tr>
                                </tbody>
                            </table>
                            <div >
                                <button style="width: 100%" type="submit" class="btn btn-primary">Đặt hàng</button>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>
    <!-- /#all -->
<?php include 'footer.php' ?>