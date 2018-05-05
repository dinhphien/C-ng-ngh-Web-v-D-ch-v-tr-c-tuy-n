<?php
include 'header.php';
 require_once ("../../models/model_sanpham.php");
?>
    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">

                    <div class="row" id="productMain">
                        <div class="col-sm-5">
                            <div id="mainImage">
                                <img src="<?php echo $sp->getUrlanhsanpham(); ?>" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="box">
                                <h1 class="text-center"><?php echo $sp->getTensanpham(); ?></h1>
                                <p>Loại sản phẩm : <?php  echo $sp->getLoaisanpham();?></p><br>
                                <p>Giá : <?php  echo $sp->getGiasanpham();?> VNĐ</p><br>
                                <p> Size : <?php  echo $sp->getSizesanpham();?></p><br>
                                <p> Số lượng : <?php  echo $sp->getSoluongsanpham();?></p><br>

                                <p class="text-center buttons">
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                    <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Ưa thích</a>
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
                                <li>Kích cỡ : <?php  echo $sp->getSizesanpham();?></li>
                                <li>Màu sắc : <?php  echo $sp->getMausacsanpham();?></li>
                            </ul>

                            <h4>Mô tả :</h4>
                            <blockquote>
                                <p><em><?php  echo $sp-> getMotasanpham();?></em>
                                </p>
                            </blockquote>
                    </div>

                    <div >
                        <h3 class="title" style=" text-align: center;">Sản phẩm tương tự </h3>
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
                                        <p class="price">Giá : <?php echo $item->getGiasanpham(); ?> <br>
                                            Size: <?php echo $item->getSizesanpham(); ?></p>
                                        <p class="buttons">
                                            <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $item-> getIdsanpham();?>" class="btn btn-default">Chi tiết</a>
                                            <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>
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