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
     },7000);
 });
});