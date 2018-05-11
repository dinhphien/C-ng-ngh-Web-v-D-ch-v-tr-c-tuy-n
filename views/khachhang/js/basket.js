$(document).ready(function () {
 $("input").on('keypress','keydown','keyup',function(event){
     event.preventDefault();
 });
 // $("#button_dat_hang").click(function () {
 //     $("#basket-modal").modal("show");
 // });
 $("#button_shipcode").click(function () {
     $("#basket-modal").modal("hide");
     $("#title_thôngbáo").text("Thông báo");
     $("#mesage_thôngbáo").text("Cảm ơn quý khách đã mua hàng. Hàng sẽ được giao trong vòng 7 ngày");
     $('#warning-modal').modal('show');
     window.setTimeout(function () {
         $("#warning-modal").modal("hide");
     },3000);
 });
 $("tr td button ").click(function () {
     var currentrow=$(this).closest('tr');
     var total_sp=parseInt($("#tongsanpham_giohang").text())-parseInt(currentrow.find("td input").val());
     var total_giatri=parseInt($("#tonggiatri_giohang").text())-parseInt(currentrow.find("td:eq(4)").text());
     $("#tonggiatri_giohang").text(total_giatri);
     $("#tongsanpham_giohang").text(total_sp);
     $("#tong_sp_giohang").text("Bạn đang có "+total_sp+" sản phẩm trong giỏ hàng");
     $("#tong_tien_don_hang").text(total_giatri+"VNĐ");
     var phi_vc=30000;
     if(total_giatri==0){phi_vc=0;}
     $("#phi_vc").text(phi_vc+"VNĐ");
     $("#tongcong").text(parseInt(total_giatri)+phi_vc+"VNĐ");
     currentrow.remove();
     var postdata={
         id : $(this).attr('id')
     }
     $.post("route.php?controller=controller_giohang&action=remove_SP",postdata,function (data,status) {
         // var datares=JSON.parse(data);
         // alert(datares+'34');
         // if(datares=="true"){
         //     alert(datares);
         // }
         console.log(data);
     });
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
     $("#tong_tien_don_hang").text(tong_gia+'VNĐ');
     var phi_vc=30000;
     if(tong_gia==0){phi_vc=0;}
     $("#phi_vc").text(phi_vc+'VNĐ');
     $("#tongcong").text(((parseInt(tong_gia)+phi_vc)+'VNĐ'));
     // alert(currentrow.find("button").attr('id'));
     // alert("false");
     var postdata={
         id : currentrow.find("button").attr('id'),
         sl : so_luong_moi
     }
     $.post("route.php?controller=controller_giohang&action=update_SP",postdata,function (data,status) {
         console.log(data);
         // alert(data);
     })


 });
 $("#button_dat_hang").click(function () {
     // alert("thanhcong");
     if($("#tongcong").text()==='0VNĐ'){
         $("#title_thôngbáo").text("Thông báo");
         $("#mesage_thôngbáo").text("Giỏ hàng trống.Tiếp tục mua hàng!");
         $('#warning-modal').modal('show');
         window.setTimeout(function () {
             $("#warning-modal").modal("hide");
         },3000);
     }else {
         $.post("route.php?controller=controller_giohang&action=check_giohang",'',function (data,status) {
             var datares=JSON.parse(data);
             // alert(datares['messeage']+datares['ten_sp']);
             // alert(datares['message']+datares['id_illegal']);
             if(datares['messeage']=="false"){
                 $("#title_thôngbáo").text("Thông báo");
                 $("#mesage_thôngbáo").text("Không đủ "+datares['sl']+" sản phẩm "+datares['ten_sp']+" .Vui lòng cập nhật giỏ hàng");
                 $('#warning-modal').modal('show');
                 window.setTimeout(function () {
                     $("#warning-modal").modal("hide");
                 },3000);

             }else {
                 if($("#btdangnhap").text()==''){

                 }else {
                     $("#basket-modal").modal("show");
                 }
             }

         });
     }

 });
});