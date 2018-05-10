$(document).ready(function () {
 $("input").keypress(function(event){
     event.preventDefault();
 });
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
     currentrow.remove();
 });
 $("tr td input").bind('keyup mouseup',function () {
     var currentrow=$(this).closest('tr');
     var dongia =currentrow.find("td:eq(3)").text();
     var so_luong_moi=$(this).val();
     currentrow.find("td:eq(4)").text(parseInt(dongia)*parseInt(so_luong_moi));
     var tong_sp=0,tong_gia=0;
     $("#tb_giohang tbody tr").each(function () {
         var currentrow=$(this);
         tong_sp=tong_sp+parseInt(currentrow.find("td input").val());
         tong_gia=tong_gia+parseInt(currentrow.find("td:eq(4)").text());
     });
     $("#tonggiatri_giohang").text(tong_gia);
     $("#tongsanpham_giohang").text(tong_sp);
     $("#tong_sp_giohang").text("Bạn đang có "+tong_sp+" sản phẩm trong giỏ hàng");
 });
});