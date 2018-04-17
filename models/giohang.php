<?php
class giohang {
    private $idgiohang;
    private $idkhachhang;
    private $dssanphamgiohang;
    private $trangthai;
    private $ngaythanhtoan;
    private $thanhtien;

    /**
     * giohang constructor.
     * @param $idgiohang
     * @param $idkhachhang
     * @param $dssanphamgiohang
     * @param $trangthai
     * @param $ngaythanhtoan
     * @param $thanhtien
     */
    public function __construct($idgiohang, $idkhachhang, $dssanphamgiohang, $trangthai, $ngaythanhtoan, $thanhtien)
    {
        $this->idgiohang = $idgiohang;
        $this->idkhachhang = $idkhachhang;
        $this->dssanphamgiohang = $dssanphamgiohang;
        $this->trangthai = $trangthai;
        $this->ngaythanhtoan = $ngaythanhtoan;
        $this->thanhtien = $thanhtien;
    }

    /**
     * @return mixed
     */
    public function getIdgiohang()
    {
        return $this->idgiohang;
    }

    /**
     * @param mixed $idgiohang
     */
    public function setIdgiohang($idgiohang)
    {
        $this->idgiohang = $idgiohang;
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
    public function getDssanphamgiohang()
    {
        return $this->dssanphamgiohang;
    }

    /**
     * @param mixed $dssanphamgiohang
     */
    public function setDssanphamgiohang($dssanphamgiohang)
    {
        $this->dssanphamgiohang = $dssanphamgiohang;
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

    /**
     * @return mixed
     */
    public function getNgaythanhtoan()
    {
        return $this->ngaythanhtoan;
    }

    /**
     * @param mixed $ngaythanhtoan
     */
    public function setNgaythanhtoan($ngaythanhtoan)
    {
        $this->ngaythanhtoan = $ngaythanhtoan;
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


}
?>