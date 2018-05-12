
<?php
require_once (__DIR__."/../../models/sanpham.php");

?>

<html>
<body>
<!--<div>-->
<!--    <a href="http://localhost/BTL_Công nghệ Web và Dịch vụ trực tuyến/controllers/route.php?controller=test_controller&action=test"> Đừng bấm vào link này sẽ có bí mật bất ngờ xảy ra đấy!</a>-->
<!--</div>-->
<div>
    <?php
//    $total_sanpham=0;
//    $total_gia=0;
//    foreach ( $array_sp as $sp_giohang) {
//        $total_gia+=$sp_giohang->getGiasanpham();
//        $total_sanpham+=$sp_giohang->getSoluongsanpham();
//    }
    $date=date("d/m/Y");
    $date2=date_create($date);
    echo $date;
//    echo $date2;
    echo gettype($date2);
    ?>
</div>
</body>
</html>

