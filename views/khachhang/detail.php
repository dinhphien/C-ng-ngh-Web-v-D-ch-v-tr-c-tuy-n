<?php
include 'header.php';
 require_once ("../../models/model_sanpham.php");
?>
    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Trang chủ</a>
                        </li>
                        <li><a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=<?php echo $sp->getLoaisanpham();?>"><?php  echo $sp->getLoaisanpham();?></a>
                        </li>
                        <li><a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=<?php echo $sp->getLoaisanpham();?>&name_sp=<?php echo $sp->getTensanpham(); ?>"><?php echo $sp->getTensanpham(); ?></a>
                        </li>
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
                                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nam">thời trang nam</a>
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
                                    <a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=Nữ">Thời trang nữ</a>
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

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="<?php echo $sp->getUrlanhsanpham(); ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php echo $sp->getTensanpham(); ?></h1>
                                <p>Loại sản phẩm : <?php  echo $sp->getLoaisanpham();?></p><br>
                                <p>Giá : <?php  echo $sp->getGiasanpham();?> VNĐ</p><br>
                                <p> Size : <?php  echo $sp->getSizesanpham();?></p><br>
                                <p> Số lượng : <?php  echo $sp->getSoluongsanpham();?></p><br>

                                <p class="text-center buttons">
                                    <button id="<?php echo $sp->getIdsanpham(); ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
                                </p>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Xem thêm </a>
                                </p>

                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h3>Chi tiết sản phẩm : </h3>
                            <h4>Thông số chung : </h4>
                            <ul>
                                <li>Tên sản phẩm : <?php echo $sp->getTensanpham(); ?></li>
                                <li>Loại sản phẩm : Dành cho <?php  echo $sp->getLoaisanpham();?></li>
                                <li>Giá : <?php  echo $sp->getGiasanpham();?> VNĐ</li>
                                <li>Số lượng :<?php  echo $sp->getSoluongsanpham();?></li>
                            </ul>
                            <h4>Kích cỡ và màu sắc :</h4>
                            <ul>
                                <li>Kích cỡ : Size <?php  echo $sp->getSizesanpham();?></li>
                                <li>Màu sắc : <?php  echo $sp->getMausacsanpham();?></li>
                            </ul>

                            <h4>Mô tả :</h4>
                            <blockquote>
                                <p><em><?php  echo $sp-> getMotasanpham();?></em>
                                </p>
                            </blockquote>
                    </div>

                    <div >
                        <h3 class="title" style=" text-align: center;">Sản phẩm khác dành cho <?php  echo $sp->getLoaisanpham();?> </h3>
                    </div>
                    <?php
                    if(count($data_sp)!=0){
                        foreach ($data_sp as $item) {
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="product same-height">
                                    <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $item->getIdsanpham(); ?>"
                                       class="visible">
                                        <img src="<?php echo $item->getUrlanhsanpham(); ?>" alt=""
                                             class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><?php echo $item->getTensanpham(); ?></h3>
                                        <p class="price">Giá : <?php echo $item->getGiasanpham(); ?> VNĐ<br>
                                            Size: <?php echo $item->getSizesanpham(); ?></p>
                                        <p class="buttons">
                                            <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $item-> getIdsanpham();?>" class="btn btn-default">Chi tiết</a>
                                            <button id="<?php echo $item->getIdsanpham(); ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.product -->
                            </div>
                            <?php
                               }
                            }
                         ?>
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
<script src="js/detail.js"></script>
