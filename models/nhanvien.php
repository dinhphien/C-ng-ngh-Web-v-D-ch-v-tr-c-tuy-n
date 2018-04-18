<?php
class nhanvien {
    private $idnhanvien;
    private $tennhanvien;
    private $email;
    private $sodienthoai;
    private $quequan;
    private $nhiemvu;
    public function __construct($idnhanvien,$tennhanvien,$email,$sodienthoai,$quequan,$nhiemvu){
        $this->idnhanvien=$idnhanvien;
        $this->tennhanvien=$tennhanvien;
        $this->email=$email;
        $this->quequan=$quequan;
        $this->sodienthoai=$sodienthoai;
        $this->nhiemvu=$nhiemvu;
    }

    /**
     * @return mixed
     */
    public function getIdnhanvien()
    {
        return $this->idnhanvien;
    }

    /**
     * @param mixed $idnhanvien
     */
    public function setIdnhanvien($idnhanvien)
    {
        $this->idnhanvien = $idnhanvien;
    }

    /**
     * @return mixed
     */
    public function getTennhanvien()
    {
        return $this->tennhanvien;
    }

    /**
     * @param mixed $tennhanvien
     */
    public function setTennhanvien($tennhanvien)
    {
        $this->tennhanvien = $tennhanvien;
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

    /**
     * @return mixed
     */
    public function getNhiemvu()
    {
        return $this->nhiemvu;
    }

    /**
     * @param mixed $nhiemvu
     */
    public function setNhiemvu($nhiemvu)
    {
        $this->nhiemvu = $nhiemvu;
    }
}
?>