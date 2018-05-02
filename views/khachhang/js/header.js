$(document).ready(function () {
    $("#registernow").click(function () {
        $('#login-modal').modal('hide');
    });
    $("#loginbutton").click(function () {
        var postdata = {
            username: $("#username-modal").val(),
            password: $("#password-modal").val()
        }
        $.post("../../controllers/route.php?controller=controller_dangnhap&action=Login",postdata,function (data,status) {
            console.log(data);
            alert(data);
            var $datares=JSON.parse(data);

            if($datares.mesage=='success'){

                if($datares.vaitro=='admin'){
                    location.href = "../admin/index_admin.php";
                }
                else{
                    location.reload('index.php');
                }
            }
            else {
              $("#message_dangnhap").text("Sai tài khoản hoặc mật khẩu");
            }
        });

    });
    $('#log_out').click(function () {
        $.post("../../controllers/route.php?controller=controller_dangnhap&action=Logout",'',function (data,status) {
            console.log(data);
            location.href='index.php';
        });
    });
    $('#buttonregister').click(function () {
        var datapost ={
            username_register :$('#username-registermodal').val(),
            password_register :$('#password-registermodal').val(),
            fullname_register :$('#fullname-registermodal').val(),
            email_register :$('#email-registermodal').val(),
            mobilephone_register :$('#mobilephone-registermodal').val(),
            address_register :$('#address-registermodal').val()
        }
        $.post("../../controllers/route.php?controller=controller_dangnhap&action=Register",datapost,function (data,status){
            console.log(data);
            // alert(data);
            var message =JSON.parse(data);
            console.log(message);
            if (message=='true'){
                $("#message_register").text("Đăng kí thành công");
                window.setTimeout(function () {
                    location.reload('index.php');
                },5000);
            }
            else{
                $("#message_register").text("Tên tài khoản đã tồn tại. Chọn tên tài khoản khác");
            }

        })
    });
});