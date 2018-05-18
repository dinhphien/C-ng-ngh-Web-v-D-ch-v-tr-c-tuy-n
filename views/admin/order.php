<?php include "header_admin.php" ?>
<!-- Common -->
<!-- Title area -->
<div id="chitietsp" class="modal fade" role="dialog" style="display: none;">
    <div class="modal-dialog" style="width: 800px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chi tiết đơn hàng</h4><div id="madonhang"></div>
            </div>
            <div class="modal-body">
                <div class="container">

                    <div id="tenkhachhang"></div><br>
                    <div id="sđt"></div><br>
                    <div id="ngaylap"></div><br>

                    <div class="container">
                        <table width="400" border="1">
                            <thead>
                                <tr>
                                    <th>Tên mặt hàng</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                </tr>
                            </thead>
                            <tbody id="ds">                    
                            </tbody>
                        </table>
                    </div>
                    <br>

                    <div id="thanhtien"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" id="duyet" >Duyệt đơn hàng</button>
                <button class="btn btn-success" data-dismiss="modal">Close</button>
                <!--                        <button type="button" class="btn btn-success" id="sua">Sửa</button>-->
            </div>
        </div>

    </div
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Đơn hàng sản phẩm</h5>
                <span>Quản lý đơn hàng</span>
            </div>


            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>

    <!-- Message -->






    <!-- Main content wrapper -->
    <div class="wrapper">

        <div class="widget">
            <div class="title">
                <span class="titleIcon"><img src="images/icons/tableArrows.png" /></span>
                <h6>Danh sách Đơn hàng sản phẩm</h6>

                <div class="num f12">Tổng số: <b><?php echo count($data) ?></b></div>
            </div>

            <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">

                <thead>
                    <tr>
                        <td style="width:60px;">Mã số đơn</td>

                        <td style="width:80px;">Tên khách hàng</td>
                        <td style="width:50px;">Số điện thoại</td>
                        <td style="width:70px;">Thành tiền</td>
                        <td style="width:75px;">Ngày lập</td>
                        <td style="width:75px;">Hình thức thanh toán</td>
                        <td style="width:75px;">Trạng thái</td>
                        <td style="width:55px;">Hành động</td>
                    </tr>
                </thead>

                <tfoot class="auto_check_pages">
                    <tr>
                        <td colspan="9">


                        </td>
                    </tr>
                </tfoot>

                <tbody class="list_item" id="dsdh">
                    <?php
                    if (!empty($data)) {
                        foreach ($data as $row) {
                            ?>
                            <tr class="row_20">
                                <td class="textC" "><?php echo $row['iddonhang']; ?></td>
                                <td class="textC"><?php echo $row['tenkhachhang']; ?></td>
                                <td class="textC"><?php echo $row['sodienthoai']; ?></td>
                                <td class="textC"><?php echo $row['thanhtien']; ?></td>
                                <td class="textC"><?php echo $row['ngaylapdonhang']; ?></td>
                                <td class="textC"><?php echo $row['hinhthucthanhtoan']; ?></td>
                                <td class="textC"><?php echo $row['trangthai']; ?></td>
                                <td class="textC"><button class="btn btn-success" id="<?php echo $row['iddonhang']; ?>">Chi tiết</button></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>


                </tbody>

            </table>
        </div>

    </div>
    <div class="clear mt30"></div>
    <script src="crown/js/order.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="crown/js/jquery-3.3.1.js"></script>
    <script src="crown/js/bootstrap.min.js"></script>
    <?php include "footer_admin.php" ?>