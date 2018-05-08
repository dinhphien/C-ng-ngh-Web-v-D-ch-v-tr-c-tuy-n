<?php include 'header.php';
 require_once ("../../models/sanpham.php");
?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Trang chủ</a>
                        </li>
                        <li><a href="route.php?controller=controller_giohang&action=showSP_giohang">Giỏ hàng</a></li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post">

                            <h1>Giỏ hàng </h1>
                            <p class="text-muted">Bạn đang có <?php echo count($array_sp); ?> sản phẩm trong giỏ hàng</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Sản phẩm</th>
                                            <th>Số lượng </th>
                                            <th>Đơn giá (VNĐ)</th>
                                            <th>Thành tiền (VNĐ)</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ( $array_sp as $sp_giohang) {

                                    ?>
                                        <tr>
                                            <td>
                                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp_giohang-> getIdsanpham();?>">
                                                    <img src="<?php echo $sp_giohang->getUrlanhsanpham(); ?>" alt="">
                                                </a>

                                            </td>
                                            <td><a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp_giohang-> getIdsanpham();?>"><?php echo $sp_giohang->getTensanpham(); ?> </a>
                                            </td>
                                            <td>
                                                <input type="number"min="1" value="<?php echo $sp_giohang->getSoluongsanpham();?>" class="form-control">
                                            </td>
                                            <td><?php echo $sp_giohang->getGiasanpham();  ?></td>
                                            <td><?php echo $sp_giohang->getGiasanpham()*$sp_giohang->getSoluongsanpham();  ?></td>
                                            <td><button class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                    </tbody>
                                    <tfoot>
                                     <?php
                                     $total_gia=0;
                                     foreach ( $array_sp as $sp_giohang) {
                                         $total_gia+=$sp_giohang->getGiasanpham();
                                     }
                                     ?>
                                        <tr>
                                            <th colspan="4">Tổng cộng </th>
                                            <th colspan="2"><?php echo $total_gia;?> VNĐ</th>
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
                        <p class="text-muted">Tổng quan</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td> (Tạm tính) Giá sản phẩm </td>
                                        <th><?php echo $total_gia;?> VNĐ</th>
                                    </tr>
                                    <tr>
                                        <td>(Tạm tính) Phí vận chuyển</td>
                                        <th>30000 VNĐ</th>
                                    </tr>
<!--                                    <tr>-->
<!--                                        <td>Tax</td>-->
<!--                                        <th>$0.00</th>-->
<!--                                    </tr>-->
                                    <tr class="total">
                                        <td>Tổng cộng</td>
                                        <th><?php echo $total_gia+30000;?> VNĐ</th>
                                    </tr>
                                </tbody>
                            </table>
                            <div >
                                <button  id="button_dat_hang" style="width: 100%" type="submit" class="btn btn-primary">Đặt hàng</button>
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
<div class="modal fade" id="basket-modal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thông báo</h4>
            </div>
            <div class="modal-body">
                <div >
                    <p class="text-center" style="color: red">Vui lòng chọn hình thức thanh toán</p>
                    <button id="button_shipcode" class="btn btn-primary">Ship Code</button>
                    <button  id="button_thanhtoanonline" class="btn btn-primary" style="float: right">Thanh toán online</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>
<script src="js/basket.js"></script>
