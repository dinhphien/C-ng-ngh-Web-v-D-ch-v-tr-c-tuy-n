<?php include "header_admin.php" ?>
<!-- Common -->
<!-- Title area -->
<div id="chitietsp" class="modal fade" role="dialog" style="display: none;">
    <div class="modal-dialog" style="width: 800px;">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chi tiết đơn hàng</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div id="tenkhachhang"></div>
                    <div id="sđt"></div><br>
                    
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
                    <div id="thanhtien"></div>
                </div>
            </div>
            <div class="modal-footer">
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

            <div class="horControlB menu_action">
                <ul>

                    <li><a href="admin/product_order.html">
                            <img src="images/icons/control/16/list.png" />
                            <span>Danh sách</span>
                        </a></li>

                    <li><a href="">
                            <img src="images/excel.png" />
                            <span>Xuất file excel</span>
                        </a></li>
                </ul>
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

                <div class="num f12">Tổng số: <b>15</b></div>
            </div>

            <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                <thead class="filter"><tr><td colspan="9">
                            <form class="list_filter form" action="index.php/admin/product_order.html" method="get">
                                <table cellpadding="0" cellspacing="0" width="100%"><tbody>

                                        <tr>
                                            <td class="label" style="width:60px;"><label for="filter_id">Mã số</label></td>
                                            <td class="item"><input name="id" value="" id="filter_id" type="text" style="width:95px;" /></td>

                                            <td class="label" style="width:60px;"><label for="filter_type">Đơn hàng</label></td>
                                            <td class="item">
                                                <select name="status">
                                                    <option value=""></option>
                                                    <option value='0' >Đợi xử lý</option>
                                                    <option value='1' >Đã gửi hàng</option>
                                                    <option value='2' >Hủy bỏ</option>
                                                </select>
                                            </td>

                                            <td class="label" style="width:60px;"><label for="filter_created">Từ ngày</label></td>
                                            <td class="item"><input name="created" value="" id="filter_created" type="text" class="datepicker" /></td>


                                            <td colspan='2' style='width:60px'>
                                                <input type="submit" class="button blueB" value="Lọc" />
                                                <input type="reset" class="basic" value="Reset" onclick="window.location.href = 'index.php/admin/product_order.html';">
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="label" style="width:60px;"><label for="filter_user">Thành viên</label></td>
                                            <td class="item"><input name="user" value="" id="filter_user" class="tipS" title="Nhập mã thành viên" type="text" /></td>

                                            <td class="label"><label for="filter_status">Giao dịch</label></td>
                                            <td class="item">
                                                <select name="transaction_status">
                                                    <option value=""></option>
                                                    <option value='0' >Đợi xử lý</option>
                                                    <option value='1' >Thành công</option>
                                                    <option value='2' >Hủy bỏ</option>
                                                </select>
                                            </td>

                                            <td class="label"><label for="filter_created_to">Đến ngày</label></td>
                                            <td class="item"><input name="created_to" value="" id="filter_created_to" type="text" class="datepicker" /></td>

                                            <td class="label"></td>
                                            <td class="item"></td>
                                        </tr>

                                    </tbody></table>
                            </form>
                        </td></tr></thead>

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

                            <div class='pagination'>
                                &nbsp;<strong>1</strong>&nbsp;<a href="admin/product_order/index/10">2</a>&nbsp;<a href="admin/product_order/index/10">Trang kế tiếp</a>&nbsp;			            </div>
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
<!--                <tr class='row_20'>

                <td class="textC">20</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product7.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/8.html" class="tipS" title="" target="_blank">
                        <b>Tivi JVC 500</b>
                    </a>	
                </td>

                <td class="textR">
                    9,500,000 đ
                    <p style='text-decoration:line-through'>10,000,000 đ</p>
                </td>

                <td class="textC">1</td>

                <td class="textC">10,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">16-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/21.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_19'>

                <td class="textC">19</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product1.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/3.html" class="tipS" title="" target="_blank">
                        <b>Tivi Akai</b>
                    </a>	
                </td>

                <td class="textR">
                    5,000,000 đ
                </td>

                <td class="textC">1</td>

                <td class="textC">5,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">15-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/20.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_18'>

                <td class="textC">18</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product1.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/3.html" class="tipS" title="" target="_blank">
                        <b>Tivi Akai</b>
                    </a>	
                </td>

                <td class="textR">
                    5,000,000 đ
                </td>

                <td class="textC">1</td>

                <td class="textC">5,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">15-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/19.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_17'>

                <td class="textC">17</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product1.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/3.html" class="tipS" title="" target="_blank">
                        <b>Tivi Akai</b>
                    </a>	
                </td>

                <td class="textR">
                    5,000,000 đ
                </td>

                <td class="textC">1</td>

                <td class="textC">5,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">15-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/18.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_16'>

                <td class="textC">16</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product1.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/3.html" class="tipS" title="" target="_blank">
                        <b>Tivi Akai</b>
                    </a>	
                </td>

                <td class="textR">
                    5,000,000 đ
                </td>

                <td class="textC">1</td>

                <td class="textC">5,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">15-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/17.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_15'>

                <td class="textC">15</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product1.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/3.html" class="tipS" title="" target="_blank">
                        <b>Tivi Akai</b>
                    </a>	
                </td>

                <td class="textR">
                    5,000,000 đ
                </td>

                <td class="textC">1</td>

                <td class="textC">5,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">15-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/16.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_14'>

                <td class="textC">14</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product1.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/3.html" class="tipS" title="" target="_blank">
                        <b>Tivi Akai</b>
                    </a>	
                </td>

                <td class="textR">
                    5,000,000 đ
                </td>

                <td class="textC">1</td>

                <td class="textC">5,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="textC">15-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/15.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_13'>

                <td class="textC">13</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product7.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/8.html" class="tipS" title="" target="_blank">
                        <b>Tivi JVC 500</b>
                    </a>	
                </td>

                <td class="textR">
                    9,500,000 đ
                    <p style='text-decoration:line-through'>10,000,000 đ</p>
                </td>

                <td class="textC">1</td>

                <td class="textC">10,000,000</td>


                <td class="status textC">
                    <span class="completed">
                        Đã gửi hàng						</span>
                </td>

                <td class="status textC">
                    <span class="completed">
                        Thành công						</span>
                </td>

                <td class="textC">14-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/14.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_12'>

                <td class="textC">12</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product7.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/8.html" class="tipS" title="" target="_blank">
                        <b>Tivi JVC 500</b>
                    </a>	
                </td>

                <td class="textR">
                    9,500,000 đ
                    <p style='text-decoration:line-through'>10,000,000 đ</p>
                </td>

                <td class="textC">2</td>

                <td class="textC">20,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="completed">
                        Thành công						</span>
                </td>

                <td class="textC">13-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/13.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>
            <tr class='row_11'>

                <td class="textC">11</td>

                <td>
                    <div class="image_thumb">
                        <img src="../upload/product/product7.jpg" height="50">
                        <div class="clear"></div>
                    </div>

                    <a href="product/view/8.html" class="tipS" title="" target="_blank">
                        <b>Tivi JVC 500</b>
                    </a>	
                </td>

                <td class="textR">
                    9,500,000 đ
                    <p style='text-decoration:line-through'>10,000,000 đ</p>
                </td>

                <td class="textC">1</td>

                <td class="textC">10,000,000</td>


                <td class="status textC">
                    <span class="pending">
                        Chờ xử lý						</span>
                </td>

                <td class="status textC">
                    <span class="completed">
                        Thành công						</span>
                </td>

                <td class="textC">13-08-2014</td>

                <td class="textC">
                    <a href="admin/tran/view/12.html" class="lightbox">
                        <img src="images/icons/color/view.png" />
                    </a>
                </td>
            </tr>-->

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