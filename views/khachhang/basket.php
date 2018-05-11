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
                        <?php
                        $total_gia=0;
                        $total_sanpham=0;
                        foreach ( $array_sp as  $sp_giohang) {
                            $total_gia+=$sp_giohang->getGiasanpham()*$sp_giohang->getSoluongsanpham();
                            $total_sanpham+=$sp_giohang->getSoluongsanpham();
                        }
                        ?>
                            <h1>Giỏ hàng </h1>
                            <p id="tong_sp_giohang" class="text-muted" style="color: red">Bạn đang có <?php echo $total_sanpham; ?> sản phẩm trong giỏ hàng</p>
                            <div class="table-responsive">
                                <table id="tb_giohang" class="table">
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
                                    foreach ( $array_sp as  $sp_giohang) {
                                    ?>
                                        <tr >
                                            <td>
                                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp_giohang-> getIdsanpham();?>">
                                                    <img src="<?php echo $sp_giohang->getUrlanhsanpham(); ?>" alt="">
                                                </a>

                                            </td>
                                            <td><a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp_giohang-> getIdsanpham();?>"><?php echo $sp_giohang->getTensanpham(); ?> </a>
                                            </td>
                                            <td class="soluong_sp">
                                                <input type="number" min="1"  style="width: 60px;" value="<?php echo $sp_giohang->getSoluongsanpham();?>" class="form-control">
                                            </td>
                                            <td class="dongia_sp"> <?php echo $sp_giohang->getGiasanpham();  ?></td>
                                            <td class="thanhtien"><?php echo $sp_giohang->getGiasanpham()*$sp_giohang->getSoluongsanpham();  ?></td>
                                            <td><button id="<?php echo $sp_giohang->getIdsanpham(); ?>" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Tổng cộng </th>
                                            <th colspan="2" id="tongsanpham_giohang"><?php echo $total_sanpham;?></th>
                                            <th colspan="2" id="tonggiatri_giohang"><?php echo $total_gia;?></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nam" class="btn btn-primary"><i class="fa fa-chevron-left"></i>Tiếp tục mua sắm</a>
                                </div>
                                <div class="pull-right">
<!--                                    <button class="btn btn-primary"><i class="fa fa-refresh"></i>Cập nhật giỏ hàng</button>-->
                                </div>
                            </div>


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
                                        <th id="tong_tien_don_hang"><?php echo $total_gia;?>VNĐ</th>
                                    </tr>
                                    <tr>
                                        <td>(Tạm tính) Phí vận chuyển</td>
                                        <th id="phi_vc"><?php if($total_gia==0){ $chiphi_sp=0; } else{$chiphi_sp=30000;} echo $chiphi_sp;?>VNĐ</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Tổng cộng</td>
                                        <th id="tongcong"><?php echo $total_gia+$chiphi_sp;?>VNĐ</th>
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
