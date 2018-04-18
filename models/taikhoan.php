<?php
class taikhoan {
    private $idtaikhoan;
    private $tentaikhoan;
    private $matkhau;
    private $vaitro;
    public function __construct($idtaikhoan,$tentaikhoan,$matkhau,$vaitro){
        $this->idtaikhoan=$idtaikhoan;
        $this->tentaikhoan=$tentaikhoan;
        $this->matkhau=$matkhau;
        $this->vaitro=$vaitro;
    }

    /**
     * @return mixed
     */
    public function getIdtaikhoan()
    {
        return $this->idtaikhoan;
    }

    /**
     * @param mixed $idtaikhoan
     */
    public function setIdtaikhoan($idtaikhoan)
    {
        $this->idtaikhoan = $idtaikhoan;
    }

    /**
     * @return mixed
     */
    public function getTentaikhoan()
    {
        return $this->tentaikhoan;
    }

    /**
     * @param mixed $tentaikhoan
     */
    public function setTentaikhoan($tentaikhoan)
    {
        $this->tentaikhoan = $tentaikhoan;
    }

    /**
     * @return mixed
     */
    public function getMatkhau()
    {
        return $this->matkhau;
    }

    /**
     * @param mixed $matkhau
     */
    public function setMatkhau($matkhau)
    {
        $this->matkhau = $matkhau;
    }

    /**
     * @return mixed
     */
    public function getVaitro()
    {
        return $this->vaitro;
    }

    /**
     * @param mixed $vaitro
     */
    public function setVaitro($vaitro)
    {
        $this->vaitro = $vaitro;
    }

}
?>