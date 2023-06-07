<?php 
 class Khoahoc{
    private $id_khoahoc;
    private $ma_khoahoc;
    private $tieu_de;
    private $mo_ta;

    public function __construct($id_khoahoc, $ma_khoahoc, $tieu_de, $mo_ta){
        $this->id_khoahoc = $id_khoahoc;
        $this->ma_khoahoc = $ma_khoahoc;
        $this->tieu_de = $tieu_de;
        $this->mo_ta = $mo_ta;
    }

    public function getId_khoahoc(){
        return $this->id_khoahoc;
    }
    public function setId_khoahoc( $id_khoahoc ){
        $this->id_khoahoc = $id_khoahoc;
    }

    public function getMa_khoahoc(){
        return $this->ma_khoahoc;
    }
    public function setMa_khoahoc( $ma_khoahoc){
        $this->ma_khoahoc = $ma_khoahoc;
    }

    public function getTieu_de(){
        return $this->tieu_de;
    }
    public function setTieu_de( $tieu_de ){
        $this->tieu_de = $tieu_de;
    }

    public function getMo_ta(){
        return $this->mo_ta;
    }
    public function setMo_ta( $mo_ta ){
        $this->mo_ta = $mo_ta;
    }
 }