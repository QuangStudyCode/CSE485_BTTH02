<?php
    class SinhVien{
        private $id_sinhvien;
        private $ten_sinhvien;
        private $ngaysinh;
        private $email;
        private $thongtin_lienhe;

        public function __construct($id_sinhvien,$ten_sinhvien,$ngaysinh,$email,$thongtin_lienhe)
        {
            $this->email = $email;
            $this->ten_sinhvien = $ten_sinhvien;
            $this->ngaysinh = $ngaysinh;
            $this->email = $email;
            $this->thongtin_lienhe = $thongtin_lienhe;
        }
        
        public function getIdSinhVien(){
            return $this->id_sinhvien;
        }
        public function getTenSinhVien(){
            return $this->ten_sinhvien;
        }
        public function getNgaySinh(){
            return $this->ngaysinh;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getThongTinLienHe(){
            return $this->thongtin_lienhe;
        }


        public function setIdSinhVien($id_sinhvien){
            $this->id_sinhvien = $id_sinhvien;
        }
        public function setTenSinhVien($ten_sinhvien){
            $this->ten_sinhvien = $ten_sinhvien;
        }
        public function setNgaySinh($ngaysinh){
            $this->ngaysinh = $ngaysinh;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setThongTinLienHe($thongtin_lienhe){
            $this->thongtin_lienhe = $thongtin_lienhe;
        }
    }

?>