<?php include "header_admin.php"?>
<div class="loginWrapper" style="top:45%;">

    <div class="widget" id="admin_login" style="height:auto; margin:auto;">
        <div class="title"><img src="images/icons/dark/laptop.png" alt="" class="titleIcon" />
            <h6>Thay đổi mật khẩu</h6>
        </div>

        <form class="form" id="form" action="" method="post">
            <fieldset>
                <div class="formRow">
                    <label for="param_username">Nhập mật khẩu cũ:</label>
                    <div class="loginInput"><input type="text" name="username" id="password_old" /></div>
                    <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label for="param_password">Nhập mật khẩu mới</label>
                    <div class="loginInput"><input type="password" name="password" id="password_new1" /></div>
                    <div class="clear"></div>
                </div>
                <div class="formRow">
                    <label for="param_password">Nhập lại mật khẩu mới</label>
                    <div class="loginInput"><input type="password" name="password" id="password_new2" /></div>
                    <div class="clear"></div>
                </div>
                <div>
                    <p id="measage_updateform" style="color: red; text-align: center"></p>
                </div>
            </fieldset>
        </form>
        <div class="loginControl">
            <!--                    <input type="submit"  value="Đăng nhập" class="dredB logMeIn" />-->
            <button class="dredB logMeIn" id="button_update_TK_admin">Lưu thay đổi </button>
            <div class="clear"></div>
        </div>
    </div>

</div>
<?php include "footer_admin.php"?>
<script src="crown/js/update_account_admin.js"></script>
