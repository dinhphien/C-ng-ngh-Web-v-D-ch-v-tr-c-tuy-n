<?php
class khachhang {
    private $idkhachhang;
    private $tenkhachhang;
    private $email;
    private $sodienthoai;
    private $quequan;

    /**
     * khachhang constructor.
     * @param $idkhachhang
     * @param $tenkhachhang
     * @param $email
     * @param $sodienthoai
     * @param $quequan
     * @param $dssanphamthich
     */
    public function __construct($idkhachhang, $tenkhachhang, $email, $sodienthoai, $quequan, $dssanphamthich)
    {
        $this->idkhachhang = $idkhachhang;
        $this->tenkhachhang = $tenkhachhang;
        $this->email = $email;
        $this->sodienthoai = $sodienthoai;
        $this->quequan = $quequan;
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
    public function getTenkhachhang()
    {
        return $this->tenkhachhang;
    }

    /**
     * @param mixed $tenkhachhang
     */
    public function setTenkhachhang($tenkhachhang)
    {
        $this->tenkhachhang = $tenkhachhang;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSodienthoai()
    {
        return $this->sodienthoai;
    }

    /**
     * @param mixed $sodienthoai
     */
    public function setSodienthoai($sodienthoai)
    {
        $this->sodienthoai = $sodienthoai;
    }

    /**
     * @return mixed
     */
    public function getQuequan()
    {
        return $this->quequan;
    }

    /**
     * @param mixed $quequan
     */
    public function setQuequan($quequan)
    {
        $this->quequan = $quequan;
    }
}
?>