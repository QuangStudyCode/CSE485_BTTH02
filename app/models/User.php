<?php
class User{
    private $id_user;
    private $gmaildangnhhap_user;
    private $matkhau_user;
    private $id_vaitro;

    public function __construct($id_user,$gmaildangnhhap_user,$matkhau_user,$id_vaitro)
    {
        $this->id_user = $id_user;
        $this->gmaildangnhhap_user = $gmaildangnhhap_user;
        $this->matkhau_user = $matkhau_user;
        $this->id_vaitro = $id_vaitro;
    }

    public function getIdUser(){
        return $this->id_user;
    }
    public function setIdUser($id_user){
        $this->id_user = $id_user;
    }

    
    public function getGmailDangNhapUser(){
        return $this->gmaildangnhhap_user;
    }
    public function setGmailDangNhapUser($gmaildangnhhap_user){
        $this->gmaildangnhhap_user = $gmaildangnhhap_user;
    }

    
    public function getMatKhauUser(){
        return $this->matkhau_user;
    }
    public function setMatKhauUser($matkhau_user){
        $this->matkhau_user = $matkhau_user;
    }
    
    public function getVaiTro(){
        return $this-> id_vaitro;
    }
    public function setVaiTro($id_vaitro){
        $this->id_vaitro = $id_vaitro;
    }
}
