<?php
include 'header.php';
 require_once ("../../models/model_tintuc.php");
?>

<body>

    

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-sm-12">

                    <ul class="breadcrumb">

                        <li><a href="index.php">Trang chủ</a>
                        </li>
                        <li><a href="route.php?controller=controller_tintuc&action=showTT">Bảng tin</a>
                        </li>
                        <li><a href="route.php?controller=controller_tintuc&action=showTT_detailname&ten_tt=<?php  echo $tt->getTentintuc();?>"><?php  echo $tt->getTentintuc();?></a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-9" id="blog-post">


                    <div class="box">

                        <h1><?php  echo $tt->getTentintuc();?></h1>
                        <p class="author-date"><?php  echo $tt->getNgayviet();?></p>
                        <p>
                            <img src="<?php echo $tt->getUrlanhtintuc(); ?>" alt="" class="img-responsive">
                        </p>

                        <div id="post-content">
                            <p>
                                <?php  echo $tt->getNoidungtintuc();?>
                            </p>
                        </div>
                        <!-- /#post-content -->

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /#blog-post -->

                <div class="col-md-3">
                    
                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>
    <!-- /#all -->
</body>

</html>
<?php include 'footer.php' ?>
