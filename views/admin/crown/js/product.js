$(document).ready(function () {
    $("#loc").click(function () {
        var id = $("#idsanpham").val();
        console.log(id);
        var name = $("#tensanpham").val();
        console.log(name);
        var cat = $("#category option:selected").val();
        console.log(cat);
        var postdata = {
            id: id,
            name: name,
            category: cat
        }
        $.post("route_admin.php?controller=controller_sanpham&action=filter", postdata, function (data) {
            var array_sp = JSON.parse(data);
            console.log(array_sp);
            $("#dssp").empty();
            if (array_sp.length != 0) {
                for (i in array_sp) {
                    var sp = array_sp[i];
                    $("#dssp").append('<tr>'

                            + '<td class="textC">' + sp['idsanpham'] + '</td>'
                            + '<td>'
                            + '<div class="image_thumb"><img src="' + sp['urlanhsanpham'] + '" height="50">'
                            + '<div class="clear"></div> '
                            + '</div>'
                            + '<a href="product/view/9.html" class="tipS" title="" target="_blank">'
                            + '<b>' + sp['tensanpham'] + '</b>'
                            + '</a>'
                            + '</td>'
                            + '<td class="textR">' + sp['giasanpham'] + '</td>'
                            + '<td class="textR">' + sp['loaisanpham'] + '</td>'
                            + '<td class="textR">' + sp['mausacsanpham'] + '</td>'
                            + '<td class="textR">' + sp['sizesanpham'] + '</td>'
                            + '<td>'
                            + '<p class="buttons">'
                            + '<button class="btn btn-primary" id="' + sp['idsanpham'] + '" >Xem chi tiết</button>'
                            + '<button class="btn btn-danger" name="xoasp">Xóa</button>'
                            + '</p>'
                            + ' </td>'
                            + '</tr>'
                            );
                }
            }
        });
    });
    $("tbody#dssp").on('click', "button[name=sua]", function () {
        $("#thanhcong").empty();
        $("#coloixayra").empty();
        var id = parseInt($(this).attr('id'));
        console.log(id);
        var postdata = {
            id_sp: id
        }
        $.post("route_admin.php?controller=controller_sanpham&action=showSP_by_ID", postdata, function (data) {

            var arr = JSON.parse(data);

            console.log(arr);
            if (arr.length != 0) {
                $("#maso").val(arr['idsanpham']);
                $("#ten").val(arr['tensanpham']);
                $("#loai").val(arr['loaisanpham']);
                $("#mau").val(arr['mausacsanpham']);
                $("#size").val(arr['sizesanpham']);
                $("#soluong").val(arr['soluongsanpham']);
                $("#mota").val(arr['motasanpham']);
                $("#gia").val(arr['giasanpham']);
                $("#anhsp").attr("src", arr['urlanhsanpham']);
                $("#anhsp").attr("name", arr['urlanhsanpham']);
                $("#chitietsp").modal('show');
            }


        })

    });
    $("#sua").click(function () {
        var id = parseInt($("#maso").val());
        var ten = $("#ten").val();
        var loai = $("#loai").val();
        var mau = $("#mau").val();
        var size = $("#size").val();
        var soluong = parseInt($("#soluong").val());
        var mota = $("#mota").val();
        var gia = parseFloat($("#gia").val());
        var url = $("#anhsp").attr("name");
        var fd = new FormData();
        var files = $('#anhup').prop('files')[0];
        fd.append('file', files);
//        console.log(fd.get('file'));
        if (fd.get('file') == 'undefined') {
            console.log(fd.get('file'));
            //alert("Bạn chưa chọn ảnh");
            var postdata = {
                id: id,
                ten: ten,
                loai: loai,
                mausac: mau,
                size: size,
                soluong: soluong,
                mota: mota,
                gia: gia,
                url: url
            }
            $.post("route_admin.php?controller=controller_sanpham&action=update", postdata, function (data) {
                console.log(data);
                location.reload();
            });
        } else {
            //console.log(typeof (fd.get('file')));
//        $.post("route_admin?controller=controller_sanpham&action=up_anh",fd,function(data){
//            console.log(data);
//        });
            //sử dụng ajax post
            fd.append('id', id);
            fd.append('loai', loai);
            fd.append('ten', ten);
            fd.append('mausac', mau);
            fd.append('size', size);
            fd.append('soluong', soluong);
            fd.append('mota', mota);
            fd.append('gia', gia);
            fd.append('url', url);
            $.ajax({
                url: 'route_admin.php?controller=controller_sanpham&action=update', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post',
                success: function (res) {
                    console.log(res);
                    location.reload();
                }

            });
        }
//        var postdata = {
//            id: id,
//            ten: ten,
//            loai: loai,
//            mausac: mau,
//       
//                 size: size,
//            soluong: soluong,
//            mota: mota,
//            gia: gia,
//            url: url
//        }
//        $.post("route_admin.php?controller=controller_sanpham&action=update", postdata, function (result) {
//            location.reload();
////            if (data) {
////                $("#thanhcong").text(data);
////            } else {
////                $("#coloixayra").text(data);
////            }
//        })
    })
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#anhsp').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    ;

    $('#anhup').change(function () {
        readURL(this);
    });
    $("#xoaanh").click(function () {
        $("#anhup").val("");
        var src = $("#anhsp").attr("name");
        $("#anhsp").attr("src", src);
    });
    $("#upanh").click(function () {
        var fd = new FormData();
        var files = $('#anhup').prop('files')[0];
        fd.append('file', files);
//        console.log(fd.get('file'));
        if (fd.get('file') == 'undefined') {
            console.log(fd.get('file'));
        } else {
            //console.log(typeof (fd.get('file')));
//        $.post("route_admin?controller=controller_sanpham&action=up_anh",fd,function(data){
//            console.log(data);
//        });
            //sử dụng ajax post
            $.ajax({
                url: 'route_admin.php?controller=controller_sanpham&action=up_anh', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: fd,
                type: 'post',
                success: function (res) {
                    console.log(res);
                }

            });
        }
    });
    $("tbody#dssp").on('click', "button[name=xoasp]", function () {
        var currentrow = $(this).closest("tr");
        var id = currentrow.find('td:eq(0)').text();
        console.log(id);
        var postdata = {
            id: id
        }
        $.post("route_admin.php?controller=controller_sanpham&action=xoasp", postdata);
        location.reload();
    })
}); 