<?php

class Diemdanh
{
    private $id_diemdanh;
    private $ngay;
    private $trangthai;
    private $id_lophocphan;
    private $id_sinhvien;

    public function __construct($id_diemdanh, $ngay, $trangthai, $id_lophocphan, $id_sinhvien)
    {
        $this->id_diemdanh = $id_diemdanh;
        $this->ngay = $ngay;
        $this->trangthai = $trangthai;
        $this->id_lophocphan = $id_lophocphan;
        $this->id_sinhvien = $id_sinhvien;
    }

    public function getDiemdanh()
    {
        return $this->id_diemdanh;
    }
    public function setDiemdanh($diemdanh){
        $this->id_diemdanh = $diemdanh;
    }

    public function getNgay()
    {
        return $this->ngay;
    }
    public function setNgay($ngay){
            $this->ngay = $ngay;
        }
    public function getTrangthai()
    {
        return $this->trangthai;
    }
    public function setTrangthai($trangthai){
        $this->trangthai = $trangthai;
    }
    public function getIdLophocphan()
    {
        return $this->id_lophocphan;
    }
    public function setIdLophocphan($id_lophocphan){
        $this->id_lophocphan = $id_lophocphan;
    }
    public function getIdSinhvien()
    {
        return $this->id_sinhvien;
    }
    public function setIdSinhvien($id_sinhvien){
        $this->id_sinhvien = $id_sinhvien;
    }
}
