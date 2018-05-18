<?php include "header_admin.php" ?>
<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
    <!-- Modal -->

    <div id="chitietsp" class="modal fade" role="dialog" style="display: none;">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chi tiết sản phẩm</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <img class="img-responsive" src="" id="anhsp" name="" width="120" height="120"></img>
                        <!--<form action="" method="post" enctype="multipart/form-data">-->
                            <label for="usr">Sửa ảnh</label>
                            <div class="row">
                                <div class="col-sm-6"><input type="file" accept="image/png, image/jpeg, image/gif" name="upanh" id="anhup"/></div> 
                                <div class="col-sm-6"> 
                                    <button  class="btn btn-danger" id="xoaanh">Xóa</button>
                                    <!--<button class="btn btn-primary" id="upanh">Sửa</button>-->
<!--                                    <input type="submit" class="btn btn-danger a" name="chonanh"/>-->
                                </div>
                            </div>  
                        <!--</form>-->

                        <label for="usr">Mã số</label>
                        <input type="text" class="form-control" id="maso">
                        <label for="usr">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="ten">
                        <label for="usr">Loai</label>
                        <input type="text" class="form-control" id="loai">
                        <label for="usr">Màu sắc</label>
                        <input type="text" class="form-control" id="mau">
                        <label for="usr">Size</label>
                        <input type="text" class="form-control" id="size">
                        <label for="usr">Số lượng</label>
                        <input type="number" class="form-control" min="1" id="soluong">
                        <label for="usr">Giá</label>
                        <input type="text" class="form-control" id="gia">
                        <label for="usr">Mô tả</label>
                        <input type="text" class="form-control" id="mota">
                        <!--                    <label for="usr">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="usr">-->                   
                    </div>
                    <p class="text-danger" id="coloixayra"></p>
                    <p class="text-danger" id="thanhcong"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="sua">Sửa</button>
                    <!--                        <button type="button" class="btn btn-success" id="sua">Sửa</button>-->
                </div>
            </div>

        </div>
    </div>


    <div class="widget">

        <div class="title">
            <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
            <h6>
                Danh sách sản phẩm			</h6>
            <div class="num f12">Số lượng: <b>0</b></div>
        </div>

        <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">

            <thead class="filter"><tr><td colspan="7">

                        <table cellpadding="0" cellspacing="0" width="80%"><tbody>

                                <tr>
                                    <td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
                                    <td class="item"><input name="id" value="" id="idsanpham" type="text" style="width:55px;" /></td>

                                    <td class="label" style="width:40px;"><label for="filter_id">Tên</label></td>
                                    <td class="item" style="width:155px;" ><input name="name" value="" id="tensanpham" type="text" style="width:155px;" /></td>

                                    <td class="label" style="width:60px;"><label for="filter_status">Thể loại</label></td>
                                    <td class="item" id="type">
                                        <select name="catalog" id="category">
                                            <option>Nam</option>
                                            <option>Nữ</option>
                                        </select>
                                    </td>

                                    <td style='width:150px'>
                                        <input type="button" class="button blueB" id="loc" value="Lọc" />

                                    </td>

                                </tr>
                            </tbody></table>

                    </td></tr></thead>

            <thead>
                <tr>
                    
                    <td style="width:60px;">Mã số</td>
                    <td style="width:200px;">Tên</td>
                    <td>Giá</td>
                    <td>Loại</td>
                    <td style="width:60px;">Màu sắc</td>
                    <td>Size</td>
                    <td style="width:200px;">Hành động</td>
                </tr>
            </thead>

           
            <tbody class="list_item" id="dssp">
                <?php
//                <?php print("ok");
                if (!empty($data)) {
                    foreach ($data as $sp) {
                        ?>


                        <tr>
                           

                            <td class="textC"><?php print($sp->getIdsanpham()); ?></td>

                            <td>
                                <div class="image_thumb">
                                    <img class="img-responsive" src="<?php print($sp->getUrlanhsanpham()); ?>" height="50">
                                    <div class="clear"></div>
                                </div>

                                <a href="product/view/9.html" class="tipS" title="" target="_blank">
                                    <b><?php print($sp->getTensanpham()); ?></b>
                                </a>
                            </td>

                            <td class="textR">
                                <?php print($sp->getGiasanpham()); ?>
                            </td>
                            <td class="textR">
                                <?php print($sp->getLoaisanpham()); ?>
                            </td>
                            <td class="textR">
                                <?php print($sp->getMausacsanpham()); ?>
                            </td>
                            <td class="textR">
                                <?php print($sp->getSizesanpham()); ?>
                            </td>

                            <td>
                                <p class="buttons">
                                    <button class="btn btn-primary" name='sua' id="<?php print($sp->getIdsanpham()); ?>" >Xem chi tiết</button>
                                    <button class="btn btn-danger" name='xoasp'>Xóa</button>
                                   
                                    <!--                                <a href="" title="Gán là nhạc tiêu biểu" class="tipE">
                                                                        <img src="images/icons/color/star.png" />
                                    <script src="crown/js/product.js" type="text/javascript"></script>
                                                                    </a>
                                                                    <a id="xemchitiet" href="" class='tipS' title="Xem chi tiết sản phẩm">
                                                                        <img src="images/icons/color/view.png" />
                                                                    </a>
                                                                    <a href="admin/product/edit/9.html" title="Chỉnh sửa" class="tipS">
                                                                        <img src="images/icons/color/edit.png" />
                                                                    </a>
                                    
                                                                    <a href="admin/product/del/9.html" title="Xóa" class="tipS verify_action" >
                                                                        <img src="images/icons/color/delete.png" />
                                                                    </a>-->
                                </p>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>

        </table>
    </div>
</div>
<script src="crown/js/product.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="crown/js/jquery-3.3.1.js"></script>
<script src="crown/js/bootstrap.min.js"></script>
<?php include "footer_admin.php" ?>