$(document).ready(function () {
    $("p.buttons button").click(function () {

        if($("#btdangnhap").text()==''){
            $("#title_thôngbáo").text("Thông báo");
            $("#mesage_thôngbáo").text("Hãy đăng nhập để tiếp tục mua hàng");
            $('#warning-modal').modal('show');
            window.setTimeout(function () {
                $("#warning-modal").modal("hide");
            },3000);
        }else {
            var postdata ={
                id : $(this).attr('id')
            };
            $.post("route.php?controller=controller_giohang&action=add_SP",postdata,function (data,status) {
                var datares= JSON.parse(data);
                if(datares!="false" ){
                    $("#title_thôngbáo").text("Thông báo");
                    $("#mesage_thôngbáo").text("Đã thêm sản phẩm vào giỏ hàng");
                    $('#warning-modal').modal('show');
                    window.setTimeout(function () {
                        $("#warning-modal").modal("hide");
                    },3000);
                }else {
                    $("#title_thôngbáo").text("Thông báo");
                    $("#mesage_thôngbáo").text("Sản phẩm đã có trong giỏ hàng");
                    $('#warning-modal').modal('show');
                    window.setTimeout(function () {
                        $("#warning-modal").modal("hide");
                    },3000);
                }

            });
        }
    });
});