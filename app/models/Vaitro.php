<?php
class Vaitro{
    private $id_vaitro;
    private $ten_vaitro;

    public function __construct($id_vaitro, $ten_vaitro){
        $this->id_vaitro = $id_vaitro;
        $this->$ten_vaitro = $ten_vaitro;
    }

    public function getId_vaitro(){
        return $this-> id_vaitro;
    }
    public function setId_vaitro($id_vaitro){
        $this->id_vaitro = $id_vaitro;
    }

    public function getTen_vaitro(){
        return $this-> ten_vaitro;
    }
    public function setTen_vaitro($ten_vaitro){
        $this->ten_vaitro = $ten_vaitro;
    }
}