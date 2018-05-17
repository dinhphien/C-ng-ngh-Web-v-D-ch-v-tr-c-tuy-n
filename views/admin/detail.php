<?php include "header_admin.php"?>
<!-- Main content wrapper -->
<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="add_news" action="product/add.html" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<h6>Chi tiết bài viết : <?php  echo $tt->getTentintuc();?></h6>
                    </div>
                    
                    
<div class="tab_container">
    <div class="col-sm-9" id="blog-post">


    <div class="box">


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

</div>


<div class="clear"></div>
                </div>
</fieldset>
</form>

</div>
<?php include "footer_admin.php" ?>