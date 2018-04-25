<?php
class sanpham {
    private $idsanpham;
    private $tensanpham;
    private $loaisanpham;
    private $giasanpham;
    private $mausacsanpham;
    private $sizesanpham;
    private $soluongsanpham;
    private $motasanpham;
    private $urlanhsanpham;

    /**
     * sanpham constructor.
     * @param $idsanpham
     * @param $tensanpham
     * @param $loaisanpham
     * @param $giasanpham
     * @param $mausacsanpham
     * @param $sizesanpham
     * @param $soluongsanpham
     * @param $motasanpham
     * @param $urlanhsanpham
     */
    public function __construct($idsanpham, $tensanpham, $loaisanpham, $giasanpham, $mausacsanpham, $sizesanpham, $soluongsanpham, $motasanpham, $urlanhsanpham)
    {
        $this->idsanpham = $idsanpham;
        $this->tensanpham = $tensanpham;
        $this->loaisanpham = $loaisanpham;
        $this->giasanpham = $giasanpham;
        $this->mausacsanpham = $mausacsanpham;
        $this->sizesanpham = $sizesanpham;
        $this->soluongsanpham = $soluongsanpham;
        $this->motasanpham = $motasanpham;
        $this->urlanhsanpham = $urlanhsanpham;
    }

    /**
     * @return mixed
     */
    public function getIdsanpham()
    {
        return $this->idsanpham;
    }

    /**
     * @param mixed $idsanpham
     */
    public function setIdsanpham($idsanpham)
    {
        $this->idsanpham = $idsanpham;
    }

    /**
     * @return mixed
     */
    public function getTensanpham()
    {
        return $this->tensanpham;
    }

    /**
     * @param mixed $tensanpham
     */
    public function setTensanpham($tensanpham)
    {
        $this->tensanpham = $tensanpham;
    }

    /**
     * @return mixed
     */
    public function getLoaisanpham()
    {
        return $this->loaisanpham;
    }

    /**
     * @param mixed $loaisanpham
     */
    public function setLoaisanpham($loaisanpham)
    {
        $this->loaisanpham = $loaisanpham;
    }

    /**
     * @return mixed
     */
    public function getGiasanpham()
    {
        return $this->giasanpham;
    }

    /**
     * @param mixed $giasanpham
     */
    public function setGiasanpham($giasanpham)
    {
        $this->giasanpham = $giasanpham;
    }

    /**
     * @return mixed
     */
    public function getMausacsanpham()
    {
        return $this->mausacsanpham;
    }

    /**
     * @param mixed $mausacsanpham
     */
    public function setMausacsanpham($mausacsanpham)
    {
        $this->mausacsanpham = $mausacsanpham;
    }

    /**
     * @return mixed
     */
    public function getSizesanpham()
    {
        return $this->sizesanpham;
    }

    /**
     * @param mixed $sizesanpham
     */
    public function setSizesanpham($sizesanpham)
    {
        $this->sizesanpham = $sizesanpham;
    }

    /**
     * @return mixed
     */
    public function getSoluongsanpham()
    {
        return $this->soluongsanpham;
    }

    /**
     * @param mixed $soluongsanpham
     */
    public function setSoluongsanpham($soluongsanpham)
    {
        $this->soluongsanpham = $soluongsanpham;
    }

    /**
     * @return mixed
     */
    public function getMotasanpham()
    {
        return $this->motasanpham;
    }

    /**
     * @param mixed $motasanpham
     */
    public function setMotasanpham($motasanpham)
    {
        $this->motasanpham = $motasanpham;
    }

    /**
     * @return mixed
     */
    public function getUrlanhsanpham()
    {
        return $this->urlanhsanpham;
    }

    /**
     * @param mixed $urlanhsanpham
     */
    public function setUrlanhsanpham($urlanhsanpham)
    {
        $this->urlanhsanpham = $urlanhsanpham;
    }


}
?>