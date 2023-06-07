<?php
class Lophocphan
{
    private $id_lophocphan;
    private $khoangthoigian;
    private $id_khoahoc;
    private $id_giangvien;

    public function __construct($id_lophocphan, $khoangthoigian, $id_khoahoc, $id_giangvien)
    {
        $this->id_lophocphan = $id_giangvien;
        $this->khoangthoigian = $khoangthoigian;
        $this->id_khoahoc = $id_khoahoc;
        $this->id_giangvien = $id_giangvien;
    }

    public function getId_lophocphan()
    {
        return $this->id_lophocphan;
    }
    public function setId_lophocphan($id_lophocphan)
    {
        $this->id_lophocphan = $id_lophocphan;
    }

    public function getKhoangthoigian()
    {
        return $this->khoangthoigian;
    }
    public function setKhoangthoigian($khoangthoigian)
    {
        $this->khoangthoigian = $khoangthoigian;
    }

    public function getId_khoahoc(){
        return $this->id_khoahoc;
    }
    public function setId_khoahoc($id_khoahoc){
        $this->id_khoahoc = $id_khoahoc;
    }

    public function getId_giangvien(){
        return $this-> id_giangvien;
    }
    public function setId_giangvien($id_giangvien){
        $this-> id_giangvien = $id_giangvien;
    }
}