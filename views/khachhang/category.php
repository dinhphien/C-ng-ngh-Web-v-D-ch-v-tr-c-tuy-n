<?php
require_once("C:/xampp/htdocs/BTL_Web/models/sanpham.php");
include 'header.php';
?>
    <div id="all">

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <?php
                        if(!empty($_GET['type_sp'])){
                        ?>
                            <li><a href="route.php?controller=controller_sanpham&action=showSP_type&type_sp=<?php echo $_GET['type_sp'];?>"><?php echo $_GET['type_sp'];?></a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if(!empty($_GET['type_sp'])&&!empty($_GET['name_sp'])){

                        ?>
                        <li>
                            <a href="route.php?controller=controller_sanpham&action=showSP_name&type_sp=<?php echo $_GET['type_sp'];?>&name_sp=<?php echo $_GET['name_sp']; ?>">
                                <?php  echo $_GET['name_sp'];?></a>
                        </li>
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
                            <h3 class="panel-title">Giá</h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <input type="radio" name="gia_sp" value="1"> 200.000-500.000VNĐ
                                    <br>
                                    <input type="radio" name="gia_sp" value="2"> 500.000-1000.000VNĐ
                                    <br>
                                    <input type="radio" name="gia_sp" value="3"> 1000.000-2000.000VNĐ
                                    <br>
                                    <input type="radio" name="gia_sp" value="4"> 2000.000-5000.000VNĐ
                                    <br>
                                    <input type="radio" name="gia_sp" value="5"> 5000.000-10.000.000VNĐ
                                    <br>
                                    <input type="radio" name="gia_sp" value="6" checked> Tất Cả
                                    <br>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i>Thêm</button>

                            </form>

                        </div>
                    </div>


                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Size</h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                            <input type="radio" name="size_sp" value="S"> S
                                        <br>
                                            <input type="radio" name="size_sp" value="M"> M
                                        <br>
                                            <input type="radio" name="size_sp" value="L"> L
                                        <br>
                                            <input type="radio" name="size_sp" value="XL"> XL
                                        <br>
                                            <input type="radio" name="size_sp" value="XXL"> XXL
                                        <br>
                                            <input type="radio" name="size_sp" value="All" checked> Tất Cả
                                        <br>

                                </div>
                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i>Thêm</button>
                            </form>

                        </div>
                    </div>


                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Màu sắc </h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                            <input type="checkbox" name="mausac_sp" value="Trắng"> <span class="colour white"></span> Trắng
                                        <br>
                                            <input type="checkbox" name="mausac_sp" value="Xanh Dương"> <span class="colour blue"></span>  Xanh Dương
                                        <br>
                                            <input type="checkbox" name="mausac_sp" value="Xanh Lá Cây"> <span class="colour green"></span>  Xanh Lá Cây
                                        <br>
                                            <input type="checkbox" name="mausac_sp" value="Đỏ"> <span class="colour red"></span>  Đỏ
                                        <br>
                                            <input type="checkbox" name="mausac_sp" value="Vàng"> <span class="colour yellow"></span>  Vàng
                                </div>
                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Thêm</button>
                            </form>

                        </div>
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="row products">
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
                                    <p class="price">Giá : <?php  echo $sp->getGiasanpham();?> <br>
                                        Size: <?php echo $sp->getSizesanpham();?></p>
                                    <p class="buttons">
                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp=<?php echo $sp-> getIdsanpham();?>" class="btn btn-default">Chi tiết</a>
                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                    </p>
                                </div>
                            </div>
                        </div>

                     <?php
                       }
                     }
                     ?>


<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="product">-->
<!--                                <a href="detail.html" class="visible">-->
<!--                                    <img src="img/product2.jpg" alt="" class="img-responsive">-->
<!--                                </a>-->
<!--                                <div class="text">-->
<!--                                    <h3>White Blouse Armani</h3>-->
<!--                                    <p class="price">Giá :$143.00VNĐ <br>-->
<!--                                        Size: M</p>-->
<!--                                    <p class="buttons">-->
<!--                                        <button class="btn btn-default">Chi tiết</button>-->
<!--                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>-->
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="product">-->
<!--                                <a href="detail.html" class="visible">-->
<!--                                    <img src="img/product3.jpg" alt="" class="img-responsive">-->
<!--                                </a>-->
<!--                                <div class="text">-->
<!--                                    <h3>Black Blouse Versace</h3>-->
<!--                                    <p class="price">Giá :$143.00VNĐ <br>-->
<!--                                        Size: M</p>-->
<!--                                    <p class="buttons">-->
<!--                                        <button class="btn btn-default">Chi tiết</button>-->
<!--                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>-->
<!--                                    </p>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="product">-->
<!--                                <a href="detail.html" class="visible">-->
<!--                                    <img src="img/product3.jpg" alt="" class="img-responsive">-->
<!--                                </a>-->
<!--                                <div class="text">-->
<!--                                    <h3>Fur coat but  very very long name name name name </h3>-->
<!--                                    <p class="price">Giá :$143.00VNĐ <br>-->
<!--                                        Size: M</p>-->
<!--                                    <p class="buttons">-->
<!--                                        <button class="btn btn-default">Chi tiết</button>-->
<!--                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>-->
<!--                                    </p>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="product">-->
<!--                                <a href="detail.html" class="visible">-->
<!--                                    <img src="img/product3.jpg" alt="" class="img-responsive">-->
<!--                                </a>-->
<!--                                <div class="text">-->
<!--                                    <h3>Fur coat but  very very long name name name name </h3>-->
<!--                                    <p class="price">Giá :$143.00VNĐ <br>-->
<!--                                        Size: M</p>-->
<!--                                    <p class="buttons">-->
<!--                                        <button class="btn btn-default">Chi tiết</button>-->
<!--                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>-->
<!--                                    </p>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="product">-->
<!--                                <a href="detail.html" class="visible">-->
<!--                                    <img src="img/product2.jpg" alt="" class="img-responsive">-->
<!--                                </a>-->
<!--                                <div class="text">-->
<!--                                    <h3>White Blouse Versace</h3>-->
<!--                                    <p class="price">Giá :$143.00VNĐ <br>-->
<!--                                        Size: M</p>-->
<!--                                    <p class="buttons">-->
<!--                                        <button class="btn btn-default">Chi tiết</button>-->
<!--                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>-->
<!--                                    </p>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="col-md-4 col-sm-6">-->
<!--                            <div class="product">-->
<!--                                <a href="detail.html" class="visible">-->
<!--                                    <img src="img/product1.jpg" alt="" class="img-responsive">-->
<!--                                </a>-->
<!--                                <div class="text">-->
<!--                                    <h3>Fur coat but  very very long name name name name </h3>-->
<!--                                    <p class="price">Giá :$143.00VNĐ <br>-->
<!--                                        Size: M</p>-->
<!--                                    <p class="buttons">-->
<!--                                        <button class="btn btn-default">Chi tiết</button>-->
<!--                                        <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>-->
<!--                                    </p>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <!-- /.products -->

                    <div class="pages">
<!--                        <p class="loadMore">-->
<!--                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>-->
<!--                        </p>-->

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
                        </ul>
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