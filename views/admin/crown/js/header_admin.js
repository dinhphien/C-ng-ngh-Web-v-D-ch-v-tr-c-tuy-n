$(document).ready(function (){
    // $("#logout_header_admin a").click(function (event) {
    //     event.preventDefault();
    // });
    $("#logout_header_admin").click(function (event) {
        event.preventDefault();
        $.post("route_admin.php?controller=controller_taikhoan&action=Logout",'',function (data,status) {
            console.log(data);
            window.location='/BTL_Web/views/khachhang/index.php';
        });
    });
});