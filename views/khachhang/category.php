<?php
require_once(__DIR__."/../../models/sanpham.php");
include 'header.php';
?>
    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Trang chủ</a>
                        </li>
                        <?php
                        if(!empty($_GET['type_sp'])){
                        ?>
                            <li id="index_typesp"><a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=<?php echo $_GET['type_sp'];?>"><?php echo $_GET['type_sp'];?></a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if(!empty($_GET['type_sp'])&&!empty($_GET['name_sp'])){

                        ?>
                        <li id="index_namesp"><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=<?php echo $_GET['type_sp'];?>&name_sp=<?php echo $_GET['name_sp']; ?>"><?php  echo $_GET['name_sp'];?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Danh mục</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nam"> Thời trang nam</a>
                                    <ul>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Áo Phông">Áo Phông</a>
                                        </li>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Áo Sơ Mi">Áo Sơ Mi</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Áo Khoác">Áo Khoác</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Áo Vest">Áo Vest</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Quần Âu">Quần Âu</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Quần Jean">Quần Jean</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nam&name_sp=Quần Short">Quần Short</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nữ"> Thời trang nữ</a>
                                    <ul>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nữ&name_sp=Áo Dài">Áo Dài</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nữ&name_sp=Áo Phông">Áo Phông</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nữ&name_sp=Áo Khoác">Áo Khoác</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nữ&name_sp=Váy">Váy</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nữ&name_sp=Chân Váy">Chân Váy</a>
                                        </li>
                                        <li><a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=Nữ&name_sp=Quần Jean">Quần Jean</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box info-bar">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="products-sort-by">
                                                <strong>Giá :</strong>
                                                <select id="select_gia" name="price_sp" class="form-control">
                                                    <option value='"200000" and "500000"'> 200.000-500.000VNĐ</option>
                                                    <option value='"500000" and "1000000"'>500.000-1000.000VNĐ</option>
                                                    <option value='"1000000" and "2000000"'>1000.000-2000.000VNĐ</option>
                                                    <option value='"2000000" and "5000000"'> 2000.000-5000.000VNĐ</option>
                                                    <option value='"5000000" and "10000000"'>5000.000-10.000.000VNĐ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Size :</strong>
                                                <select id="select_size" name="size_sp" class="form-control">
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                    <option value="XXL">XXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Màu sắc :</strong>
                                                <select id="select_mausac" name="color_sp" class="form-control">
                                                    <option value="Trắng">Trắng</option>
                                                    <option value="Đen">Đen</option>
                                                    <option value="Xanh Dương">Xanh Dương</option>
                                                    <option value="Xanh Lá Cây">Xanh Lá Cây</option>
                                                    <option value="Vàng">Vàng</option>
                                                    <option value="Đỏ">Đỏ</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    <div class="row products showproducts">
                        <?php
                        if(!empty($data)){
                            foreach ($data as $sp) {
                                ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp-> getIdsanpham();?>" class="visible">
                                    <img src="<?php echo $sp->getUrlanhsanpham(); ?>" alt="" class="img-responsive">
                                </a>

                                <div class="text">
                                    <h3><?php echo $sp->getTensanpham(); ?></h3>
                                    <p class="price">Giá : <?php  echo $sp->getGiasanpham();?> VNĐ<br>
                                        Size: <?php echo $sp->getSizesanpham();?></p>
                                    <p class="buttons">
                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp-> getIdsanpham();?>" class="btn btn-default">Chi tiết</a>
                                        <button id="<?php echo $sp->getIdsanpham(); ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                    </p>
                                </div>
                            </div>
                        </div>

                     <?php
                       }
                     }
                     ?>
                    </div>
                    <!-- /.products -->

                    <div class="pages">
<!--                        <p class="loadMore">-->
<!--                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>-->
<!--                        </p>-->
<!--
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>-->
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

    </div>
    <!-- /#all -->
<?php include 'footer.php' ?>
<script src="js/category.js"></script>