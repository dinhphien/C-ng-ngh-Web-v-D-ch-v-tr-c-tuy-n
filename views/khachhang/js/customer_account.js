$(document).ready(function () {
    $("#logout_customer_account").click(function () {
        $.post("route.php?controller=controller_taikhoan&action=Logout",'',function (data,status) {
            console.log(data);
            location.href='index.php';
        });
    });
    $("#button_luu_mk").click(function () {
        var mk_cu= $("#password_old").val();
        var mk_moi_1=$("#password_new_1").val();
        var mk_moi_2=$("#password_new_2").val();
        if((mk_cu=='')||(mk_moi_1=='')||(mk_moi_2=='')){
            $("#title_thôngbáo").text("Thông báo");
            $("#mesage_thôngbáo").text("Vui lòng điền đầy đủ thông tin!");
            $('#warning-modal').modal('show');
            window.setTimeout(function () {
                $("#warning-modal").modal("hide");
            },3000);
        }else {
            if(mk_moi_1!=mk_moi_2){
                $("#title_thôngbáo").text("Thông báo");
                $("#mesage_thôngbáo").text("Nhập lại mật khẩu mới!");
                $('#warning-modal').modal('show');
                window.setTimeout(function () {
                    $("#warning-modal").modal("hide");
                },3000);
            }else {
                $.post("route.php?controller=controller_taikhoan&action=showMatkhau",'',function (data,status) {
                    console.log(data);
                    var mk=JSON.parse(data);
                    if(mk!=mk_cu){
                        $("#title_thôngbáo").text("Thông báo");
                        $("#mesage_thôngbáo").text("Sai mật khẩu cũ!");
                        $('#warning-modal').modal('show');
                        window.setTimeout(function () {
                            $("#warning-modal").modal("hide");
                        },3000);
                    }else{
                        var datapost={
                            mk_moi : mk_moi_1
                        }
                        $.post("route.php?controller=controller_taikhoan&action=capnhat_TK",datapost,function (data,status) {
                            console.log(data);
                                $("#title_thôngbáo").text("Thông báo");
                                $("#mesage_thôngbáo").text("Cập nhật mật khẩu thành cônng!");
                                $('#warning-modal').modal('show');
                                window.setTimeout(function () {
                                    $("#warning-modal").modal("hide");
                                    window.location.href="customer-account.php";
                                },3000);

                        });


                    }
                });

            }
        }
    });
    $("#button_thaydoi_thongtin").click(function () {
        var ten_moi=$("#fullname_change").val();
        var sdt_moi=$("#phone_change").val();
        var add_moi=$("#address_change").val();
        var email_moi=$("#email_change").val();
        if((ten_moi=='')||(sdt_moi=="")||(add_moi=="")||(email_moi=="")){
            $("#title_thôngbáo").text("Thông báo");
            $("#mesage_thôngbáo").text("Vui lòng điền đầy đủ thông tin!");
            $('#warning-modal').modal('show');
            window.setTimeout(function () {
                $("#warning-modal").modal("hide");
            },3000);
        }else {
            var datapost={
                ten_moi : ten_moi,
                sdt_moi : sdt_moi,
                add_moi : add_moi,
                email_moi: email_moi
            }
            $.post("route.php?controller=controller_taikhoan&action=capnhat_thongtin_kh",datapost,function (data,status) {
                console.log(data);
                var datares=JSON.parse(data);
                if(datares=="true"){
                    $("#title_thôngbáo").text("Thông báo");
                    $("#mesage_thôngbáo").text("Thay đổi thông tin thành công!");
                    $('#warning-modal').modal('show');
                    window.setTimeout(function () {
                        $("#warning-modal").modal("hide");
                        window.location.href="customer-account.php";
                    },3000);
                }


            });
        }

    });

});
