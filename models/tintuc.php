<?php
class tintuc{
    private $idtintuc;
    private $tentintuc;
    private $noidungtintuc;
    private $urlanhtintuc;
    private $ngayviet;

    public function __construct($idtintuc, $tentintuc, $noidungtintuc, $urlanhtintuc, $ngayviet){
        $this->idtintuc = $idtintuc;
        $this->tentintuc = $tentintuc;
        $this->noidungtintuc = $noidungtintuc;
        $this->urlanhtintuc = $urlanhtintuc;
        $this->ngayviet = $ngayviet;
    }

    public function getIdtintuc()
    {
        return $this->idtintuc;
    }

    public function getTentintuc()
    {
        return $this->tentintuc;
    }

    public function getNoidungtintuc()
    {
        return $this->noidungtintuc;
    }

    public function getUrlanhtintuc()
    {
        return $this->urlanhtintuc;
    }

    public function getNgayviet()
    {
        return $this->ngayviet;
    }

    public function setIdtintuc($idtintuc)
    {
        $this->idtintuc = $idtintuc;
    }
    
    public function setNoidungtintuc($noidungtintuc)
    {
        $this->noidungtintuc = $noidungtintuc;
    }
    
    public function setTentintuc($tentintuc)
    {
        $this->tentintuc = $tentintuc;
    }

    public function setUrlanhtintuc($urlanhtintuc)
    {
        $this->urlanhtintuc = $urlanhtintuc;
    }

    public function setIdsanpham($ngayviet)
    {
        $this->ngayviet = $ngayviet;
    }
}
?>