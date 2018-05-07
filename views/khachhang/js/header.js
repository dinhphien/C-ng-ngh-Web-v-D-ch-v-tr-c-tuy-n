$(document).ready(function () {
    $("#registernow").click(function () {
        $('#login-modal').modal('hide');
    });
    $("#loginbutton").click(function () {
        var postdata = {
            username: $("#username-modal").val(),
            password: $("#password-modal").val()
        }
        $.post("route.php?controller=controller_taikhoan&action=Login",postdata,function (data,status) {
            console.log(data);
            var $datares=JSON.parse(data);
            // alert($datares.vaitro);
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
                window.setTimeout(function () {
                    location.reload('index.php');
                },3000);
            }
        });

    });
    $('#log_out').click(function (){
        // alert('dung roi');
        $.post("route.php?controller=controller_taikhoan&action=Logout",'',function (data,status) {
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
        $.post("route.php?controller=controller_taikhoan&action=Register",datapost,function (data,status){
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