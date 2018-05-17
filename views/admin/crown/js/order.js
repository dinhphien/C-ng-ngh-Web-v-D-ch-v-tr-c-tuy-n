$(document).ready(function(){
    $("tbody#dsdh").on('click','button',function(){
        var id = parseInt($(this).attr('id'));
        console.log(id);
        var postdata={
            iddonhang: id
        }
        $.post("route_admin.php?controller=controller_donhang&action=show_donhang_by_ID",postdata,function(data){
            var j=JSON.parse(data);
            console.log(j);
             $("#ds").empty();
            for(var i=0;i<j.length;i++){
              
               $("#ds").append("<tr><td>"+j[i]['tensanpham']+"</td><td>"+j[i]['soluong']+"</td><td>"+j[i]['giaspdh']+"</td></tr>")
            }
            $("#tenkhachhang").empty();
            $("#tenkhachhang").append("Khách hàng: "+j[0]['tenkhachhang']);
            $("#sđt").empty();
            $("#sđt").append("Số điện thoại: "+j[0]['sodienthoai']);
            $("#thanhtien").empty();
            $("#thanhtien").append("Tổng tiền: "+j[0]['thanhtien']);
             $("#ngaylap").empty();
            $("#ngaylap").append("Ngày lập: "+j[0]['ngaylapdonhang']);
             $("#madonhang").empty();
            $("#madonhang").append(j[0]['iddonhang']);
             $("#chitietsp").modal('show');
            
        })
    });
    $("#duyet").click(function(){
        var id=parseInt($("#madonhang").text());
        var postdata={
            id: id
        }
        $.post("route_admin.php?controller=controller_donhang&action=duyet_don_hang",postdata,function(data){
            console.log(data);
            location.reload();
        })
    })
})

