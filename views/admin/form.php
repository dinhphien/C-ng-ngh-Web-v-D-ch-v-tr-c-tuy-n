<?php include "header_admin.php" ?>
<!-- Main content wrapper -->
<div class="wrapper">

    <!-- Form -->

    <form class="form" id="form" action="route_admin.php?controller=controller_sanpham&action=insert" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="widget">
                <?php
                if (isset($result)) {
                    echo "<h2>" . $result . "</h2>";
                }
                ?>
                <div class="title">
                    <img src="images/icons/dark/add.png" class="titleIcon" />
                    <h6>Thêm mới Sản phẩm</h6>
                </div>

                <div class="tab_container">
                    <div id='tab1' class="tab_content pd0">
                        <div class="formRow">
                            <label class="formLeft" for="param_name">Tên:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input name="ten"_autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                            <div class="formRight">
                                <div class="left"><input type="file"  name="anh"  required></div>
                                <div name="image_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label class="formLeft">Loại:</label>
                            <div class="formRight">

                                <span class="oneTwo"><input name="loai" _autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label class="formLeft" for="param_name">Giá bán:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input name="gia"  _autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft" for="param_name">Số lượng:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input name="soluong"  _autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft" for="param_name">Size:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input name="size"  _autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow">
                            <label class="formLeft" for="param_name">Màu sắc:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input name="mausac"  _autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>


                        <div class="formRow">
                            <label class="formLeft" for="param_name">Mô tả:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input name="mota"  _autocheck="true" type="text" required/></span>
                                <span name="name_autocheck" class="autocheck"></span>
                                <div name="name_error" class="clear error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>


                    </div><!-- End tab_container-->

                    <div class="formSubmit">
                        <input type="submit" value="Thêm mới" class="redB" />
                        <input type="reset" value="Hủy bỏ" class="basic" />
                    </div>
                    <div class="clear"></div>
                </div>
        </fieldset>
    </form>
</div>
<?php include "footer_admin.php"; ?>