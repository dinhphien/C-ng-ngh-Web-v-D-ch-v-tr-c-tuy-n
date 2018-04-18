$(document).ready(function () {
    $("#registernow").click(function () {
        $('#login-modal').modal('hide');
    });
    $("#loginbutton").click(function () {
        var postdata = {
            username: $("#username-modal").val(),
            password: $("#password-modal").val()
        }
        $.post("../../controllers/controllerlogin.php",postdata,function (data,status) {
            console.log(data);
            var $datares=JSON.parse(data);

            if($datares.mesage==='success'){

                if($datares.vaitro==='admin'){
                    window.location='index.php';

                }
                else{

                    $("#btdangnhap").text($datares.tentaikhoan);
                    location.reload('index.php');
                }
            }
            else {
                // $("#message_dangnhap").text("Sai tài khoản hoặc mật khẩu");
            }


        });

    });
})