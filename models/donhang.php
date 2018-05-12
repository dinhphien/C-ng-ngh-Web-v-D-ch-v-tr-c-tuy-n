<?php
class donhang{
    private $iddonhang;
    private $idkhachhang;
    private $thanhtien;
    private $ngaylaphoadon;
    private $hinhthucthanhtoan;
    private $trangthai;

    /**
     * donhang constructor.
     * @param $iddonhang
     * @param $idkhachhang
     * @param $thanhtien
     * @param $ngaylaphoadon
     * @param $hinhthucthanhtoan
     * @param $trangthai
     */
    public function __construct($iddonhang, $idkhachhang, $thanhtien, $ngaylaphoadon, $hinhthucthanhtoan, $trangthai)
    {
        $this->iddonhang = $iddonhang;
        $this->idkhachhang = $idkhachhang;
        $this->thanhtien = $thanhtien;
        $this->ngaylaphoadon = $ngaylaphoadon;
        $this->hinhthucthanhtoan = $hinhthucthanhtoan;
        $this->trangthai = $trangthai;
    }

    /**
     * @return mixed
     */
    public function getIddonhang()
    {
        return $this->iddonhang;
    }

    /**
     * @param mixed $iddonhang
     */
    public function setIddonhang($iddonhang)
    {
        $this->iddonhang = $iddonhang;
    }

    /**
     * @return mixed
     */
    public function getIdkhachhang()
    {
        return $this->idkhachhang;
    }

    /**
     * @param mixed $idkhachhang
     */
    public function setIdkhachhang($idkhachhang)
    {
        $this->idkhachhang = $idkhachhang;
    }

    /**
     * @return mixed
     */
    public function getThanhtien()
    {
        return $this->thanhtien;
    }

    /**
     * @param mixed $thanhtien
     */
    public function setThanhtien($thanhtien)
    {
        $this->thanhtien = $thanhtien;
    }

    /**
     * @return mixed
     */
    public function getNgaylaphoadon()
    {
        return $this->ngaylaphoadon;
    }

    /**
     * @param mixed $ngaylaphoadon
     */
    public function setNgaylaphoadon($ngaylaphoadon)
    {
        $this->ngaylaphoadon = $ngaylaphoadon;
    }

    /**
     * @return mixed
     */
    public function getHinhthucthanhtoan()
    {
        return $this->hinhthucthanhtoan;
    }

    /**
     * @param mixed $hinhthucthanhtoan
     */
    public function setHinhthucthanhtoan($hinhthucthanhtoan)
    {
        $this->hinhthucthanhtoan = $hinhthucthanhtoan;
    }

    /**
     * @return mixed
     */
    public function getTrangthai()
    {
        return $this->trangthai;
    }

    /**
     * @param mixed $trangthai
     */
    public function setTrangthai($trangthai)
    {
        $this->trangthai = $trangthai;
    }



}
?>