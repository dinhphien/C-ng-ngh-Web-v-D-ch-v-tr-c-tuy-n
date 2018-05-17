<?php
require_once(__DIR__."/../../models/tintuc.php");
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    
</head>

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
                    </ul>
                </div>

                <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                <div class="col-sm-9" id="blog-listing">

                    <ul class="breadcrumb">
                        <h2>Danh sách bài viết</h2>

                    </ul>

                    <?php
                    if(!empty($dataTT)){
                        foreach($dataTT as $tt){
                            ?>
                    <div class="post">
                        <h2><a href="route.php?controller=controller_tintuc&action=showTT_detailname&ten_tt=<?php  echo $tt->getTentintuc();?>"><?php  echo $tt->getTentintuc();?></a></h2>
                        <hr>
                        
                        <p class="date">
                            <h5><i class="fa fa-calendar-o"></i><?php  echo $tt->getNgayviet();?></h5>
                        </p>
                        
                        <div class="image">
                            <a href="route.php?controller=controller_tintuc&action=showTT_detailname&ten_tt=<?php  echo $tt->getTentintuc();?>">
                                <img src="<?php echo $tt->getUrlanhtintuc(); ?>" alt="" class="img-responsive">
                            </a>
                        </div>

                    </div>                        
                    
                    <?php    
                        }
                    }
                    ?>

                </div>
                <!-- /.col-md-9 -->

                <!-- *** LEFT COLUMN END *** -->


                <div class="col-md-3">
                    <!-- *** BLOG MENU ***
 _________________________________________________________ -->
 
                    <!-- /.col-md-3 -->

                    <!-- *** BLOG MENU END *** -->
                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="blog.php">Giới thiệu</a>
                                 </li>   
                                <li>
                                    <a href="faq.php">Câu hỏi thường gặp</a>
                                </li>
                                <li>
                                    <a href="post.php">Tin tức</a>
                                </li>
                            </ul>
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
