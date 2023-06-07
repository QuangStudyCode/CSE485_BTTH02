<?php
class Giangvien {
    private $id_giangvien;
    private $ten_giangvien;
    private $email;
    private $thongtin_lienhe;

    public function __construct($id_giangvien, $ten_giangvien, $email, $thongtin_lienhe){
        $this->id_giangvien = $id_giangvien;
        $this->ten_giangvien = $ten_giangvien;
        $this->email = $email;
        $this->thongtin_lienhe = $thongtin_lienhe;
    }

    public function getId_giangvien() {
        return $this->id_giangvien;
    }
    public function setId_giangvien($id_giangvien) {
        $this->id_giangvien = $id_giangvien;
    }

    public function getTen_giangvien() {
        return $this->ten_giangvien;
    }
    public function setTen_giangvien($ten_giangvien){
        $this->ten_giangvien = $ten_giangvien;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function getThongtin_lienhe(){
        return $this->thongtin_lienhe;
    }
    public function setThongtin_lienhe($thongtin_lienhe){
        $this->thongtin_lienhe = $thongtin_lienhe;
    }
}