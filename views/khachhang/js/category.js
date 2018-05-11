$(document).ready(function () {
  $("select").on('change',function () {
      var mausac_sp = $("#select_mausac option:selected").val();
      var size_sp = $("#select_size option:selected").val();
      var gia_sp = $("#select_gia option:selected").val();
      var type_sp= $("#index_typesp").text();
      var name_sp=$("#index_namesp").text();
      alert("Thành công");
  });
  $("p.buttons button").click(function () {
          var postdata ={
              id : $(this).attr('id')
          };
          $.post("route.php?controller=controller_giohang&action=add_SP",postdata,function (data,status) {
              var datares= JSON.parse(data);
              if(datares!="false" ) {
                  $("#title_thôngbáo").text("Thông báo");
                  $("#mesage_thôngbáo").text("Đã thêm sản phẩm vào giỏ hàng");
                  $('#warning-modal').modal('show');
                  window.setTimeout(function () {
                      $("#warning-modal").modal("hide");
                  }, 3000);
              }

          });

  });
});