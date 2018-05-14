$(document).ready(function () {
    $("#button_update_TK_admin").click(function () {
        var mk_cu= $("#password_old").val();
        var mk_moi_1=$("#password_new1").val();
        var mk_moi_2=$("#password_new2").val();
        if((mk_cu=="")||(mk_moi_1=="")||(mk_moi_2=="")){
            $("#measage_updateform").text("Vui lòng điền đầy đủ thông tin");
        }else {
            if(mk_moi_1!=mk_moi_2){
                $("#measage_updateform").text("Nhập lại mật khẩu mới");
                
            }else{
                $.post("route_admin.php?controller=controller_taikhoan&action=showMatkhau_Admin","",function (data,status) {
                    console.log(data);
                    var mk=JSON.parse(data);
                    if(mk!=mk_cu){
                        $("#measage_updateform").text("Sai mật khẩu cũ ");
                    }else {
                        var postdata = {
                            mk_moi: mk_moi_1
                        }
                        $.post("route_admin.php?controller=controller_taikhoan&action=capnhat_TK_admin",postdata,function (data,status) {
                            console.log(data);
                            $("#measage_updateform").text("Cập nhật mật khẩu thành công ");
                        });
                    }
                    
                });
            }
        }
    });
});