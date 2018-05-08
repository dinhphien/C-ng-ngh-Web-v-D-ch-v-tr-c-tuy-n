$(document).ready(function () {
 $("#button_dat_hang").click(function () {
     $("#basket-modal").modal("show");
 });
 $("#button_shipcode").click(function () {
     $("#basket-modal").modal("hide");
     $("#title_thôngbáo").text("Thông báo");
     $("#mesage_thôngbáo").text("Cảm ơn quý khách đã mua hàng. Hàng sẽ được giao trong vòng 7 ngày");
     $('#warning-modal').modal('show');
     window.setTimeout(function () {
         $("#warning-modal").modal("hide");
     },5000);
 });
 $("tr td button ").click(function () {
     var currentrow=$(this).closest('tr');
     var total_sp=parseInt($("#tongsanpham_giohang").text())-parseInt(currentrow.find("td input").val());
     var total_giatri=parseInt($("#tonggiatri_giohang").text())-parseInt(currentrow.find("td:eq(4)").text());
     $("#tonggiatri_giohang").text(total_giatri);
     $("#tongsanpham_giohang").text(total_sp);
     $("#tong_sp_giohang").text("Bạn đang có "+total_sp+" sản phẩm trong giỏ hàng");
     currentrow.hide();
 });
});