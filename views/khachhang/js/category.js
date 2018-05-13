$(document).ready(function () {
  $("#select_gia").on('change',function () {
      var gia_sp = $("#select_gia option:selected").val();
      var type_sp= $("#index_typesp").text();
      var name_sp=$("#index_namesp").text();
      // alert(gia_sp);
      if(name_sp==""){
          var postdata={
              type_sp : type_sp,
              gia_sp : gia_sp
          }
          $.post("route.php?controller=controller_sanpham&action=showSP_type_gia",postdata,function (data,status) {
              var array_sp=JSON.parse(data);
              console.log(array_sp);
              $(".showproducts").empty();
              if(array_sp.length!=0){
                  for(i in array_sp){
                      var sp=array_sp[i];
                      $(".showproducts").append('<div class="col-md-4 col-sm-6">' +
                          '                            <div class="product">' +
                          '                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="visible">' +
                          '                                    <img src="'+sp['urlanhsanpham']+'" alt="" class="img-responsive">' +
                          '                                </a>' +
                          '                                <div class="text">' +
                          '                                    <h3>'+sp['tensanpham']+'</h3>' +
                          '                                    <p class="price">Giá :'+sp['giasanpham']+' VNĐ<br>' +
                          '                                        Size:'+sp['sizesanpham']+'</p>' +
                          '                                    <p class="buttons">' +
                          '                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="btn btn-default">Chi tiết</a>' +
                          '                                        <button id="'+sp['idsanpham']+'" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>' +
                          '                                    </p>' +
                          '                                </div>' +
                          '                            </div>' +
                          '                        </div>');
                  }

              }



          });

      }else{
          var postdata={
              type_sp : type_sp,
              gia_sp : gia_sp,
              name_sp : name_sp
          }
          $.post("route.php?controller=controller_sanpham&action=showSP_type_name_gia",postdata,function (data,status) {
              var array_sp=JSON.parse(data);
              console.log(array_sp);
              $(".showproducts").empty();
              if(array_sp.length!=0){
                  for(i in array_sp){
                      var sp=array_sp[i];
                      $(".showproducts").append('<div class="col-md-4 col-sm-6">' +
                          '                            <div class="product">' +
                          '                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="visible">' +
                          '                                    <img src="'+sp['urlanhsanpham']+'" alt="" class="img-responsive">' +
                          '                                </a>' +
                          '                                <div class="text">' +
                          '                                    <h3>'+sp['tensanpham']+'</h3>' +
                          '                                    <p class="price">Giá :'+sp['giasanpham']+' VNĐ<br>' +
                          '                                        Size:'+sp['sizesanpham']+'</p>' +
                          '                                    <p class="buttons">' +
                          '                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="btn btn-default">Chi tiết</a>' +
                          '                                        <button id="'+sp['idsanpham']+'" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>' +
                          '                                    </p>' +
                          '                                </div>' +
                          '                            </div>' +
                          '                        </div>');
                  }

              }

          });
      }
  });
  $("#select_size").on('change',function () {
      var size_sp = $("#select_size option:selected").val();
      var type_sp= $("#index_typesp").text();
      var name_sp=$("#index_namesp").text();
      // alert(name_sp);
      if(name_sp==""){
          var postdata={
              type_sp : type_sp,
              size_sp : size_sp
          }
          $.post("route.php?controller=controller_sanpham&action=showSP_type_size",postdata,function (data,status) {

              var array_sp=JSON.parse(data);
              console.log(array_sp);
              $(".showproducts").empty();
              if(array_sp.length!=0){
                  for(i in array_sp){
                      var sp=array_sp[i];
                      $(".showproducts").append('<div class="col-md-4 col-sm-6">' +
                          '                            <div class="product">' +
                          '                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="visible">' +
                          '                                    <img src="'+sp['urlanhsanpham']+'" alt="" class="img-responsive">' +
                          '                                </a>' +
                          '                                <div class="text">' +
                          '                                    <h3>'+sp['tensanpham']+'</h3>' +
                          '                                    <p class="price">Giá :'+sp['giasanpham']+' VNĐ<br>' +
                          '                                        Size:'+sp['sizesanpham']+'</p>' +
                          '                                    <p class="buttons">' +
                          '                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="btn btn-default">Chi tiết</a>' +
                          '                                        <button id="'+sp['idsanpham']+'" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>' +
                          '                                    </p>' +
                          '                                </div>' +
                          '                            </div>' +
                          '                        </div>');
                  }

              }

          });

      }else{
          var postdata={
              type_sp : type_sp,
              size_sp : size_sp,
              name_sp : name_sp
          }
          $.post("route.php?controller=controller_sanpham&action=showSP_type_name_size",postdata,function (data,status) {

              var array_sp=JSON.parse(data);
              console.log(array_sp);
              $(".showproducts").empty();
              if(array_sp.length!=0){
                  for(i in array_sp){
                      var sp=array_sp[i];
                      $(".showproducts").append('<div class="col-md-4 col-sm-6">' +
                          '                            <div class="product">' +
                          '                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="visible">' +
                          '                                    <img src="'+sp['urlanhsanpham']+'" alt="" class="img-responsive">' +
                          '                                </a>' +
                          '                                <div class="text">' +
                          '                                    <h3>'+sp['tensanpham']+'</h3>' +
                          '                                    <p class="price">Giá :'+sp['giasanpham']+' VNĐ<br>' +
                          '                                        Size:'+sp['sizesanpham']+'</p>' +
                          '                                    <p class="buttons">' +
                          '                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="btn btn-default">Chi tiết</a>' +
                          '                                        <button id="'+sp['idsanpham']+'" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>' +
                          '                                    </p>' +
                          '                                </div>' +
                          '                            </div>' +
                          '                        </div>');
                  }

              }


          });
      }
  });
  $("#select_mausac").on('change',function () {
      var mausac_sp = $("#select_mausac option:selected").val();
      var type_sp= $("#index_typesp").text();
      var name_sp=$("#index_namesp").text();
      if(name_sp==""){
          var postdata={
              type_sp : type_sp,
              mausac_sp : mausac_sp
          }
          $.post("route.php?controller=controller_sanpham&action=showSP_type_mausac",postdata,function (data,status) {
              var array_sp=JSON.parse(data);
              console.log(array_sp);
              $(".showproducts").empty();
              if(array_sp.length!=0){
                  for(i in array_sp){
                      var sp=array_sp[i];
                      $(".showproducts").append('<div class="col-md-4 col-sm-6">' +
                          '                            <div class="product">' +
                          '                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="visible">' +
                          '                                    <img src="'+sp['urlanhsanpham']+'" alt="" class="img-responsive">' +
                          '                                </a>' +
                          '                                <div class="text">' +
                          '                                    <h3>'+sp['tensanpham']+'</h3>' +
                          '                                    <p class="price">Giá :'+sp['giasanpham']+' VNĐ<br>' +
                          '                                        Size:'+sp['sizesanpham']+'</p>' +
                          '                                    <p class="buttons">' +
                          '                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="btn btn-default">Chi tiết</a>' +
                          '                                        <button id="'+sp['idsanpham']+'" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>' +
                          '                                    </p>' +
                          '                                </div>' +
                          '                            </div>' +
                          '                        </div>');
                  }

              }



          });

      }else{
          var postdata={
              type_sp : type_sp,
              mausac_sp : mausac_sp,
              name_sp : name_sp
          }
          $.post("route.php?controller=controller_sanpham&action=showSP_type_name_mausac",postdata,function (data,status) {
              var array_sp=JSON.parse(data);
              console.log(array_sp);
              $(".showproducts").empty();
              if(array_sp.length!=0){
                  for(i in array_sp){
                      var sp=array_sp[i];
                      $(".showproducts").append('<div class="col-md-4 col-sm-6">' +
                          '                            <div class="product">' +
                          '                                <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="visible">' +
                          '                                    <img src="'+sp['urlanhsanpham']+'" alt="" class="img-responsive">' +
                          '                                </a>' +
                          '                                <div class="text">' +
                          '                                    <h3>'+sp['tensanpham']+'</h3>' +
                          '                                    <p class="price">Giá :'+sp['giasanpham']+' VNĐ<br>' +
                          '                                        Size:'+sp['sizesanpham']+'</p>' +
                          '                                    <p class="buttons">' +
                          '                                        <a href="route.php?controller=controller_sanpham&action=showSP_detail&id_sp='+sp['idsanpham']+'" class="btn btn-default">Chi tiết</a>' +
                          '                                        <button id="'+sp['idsanpham']+'" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>' +
                          '                                    </p>' +
                          '                                </div>' +
                          '                            </div>' +
                          '                        </div>');
                  }

              }


          });
      }

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