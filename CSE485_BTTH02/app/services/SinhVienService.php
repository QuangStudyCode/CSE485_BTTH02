<?php
require_once APP_ROOT .'/app/models/SinhVien.php';
    class SinhVienService{
        public function getAllSinhVien()
        {
            // b1
            // 
            $dbConnection = new DBconnection();
            $conn = $dbConnection->getConnection();
    
            if ($conn != null) {
                // b2
                $sql = "SELECT * FROM sinhvien ORDER BY id";
                $stmt = $conn->query($sql);
    
                // b3
                $patients = [];
                while ($row = $stmt->fetch()) {
                    $sinhvien = new SinhVien($row['id_sinhvien'], $row['ten_sinhvien'], $row['ngaysinh'], $row['email'], $row['thongtin_lienhe']);
                    $sinhviens[] = $sinhvien;
                }
    
                return $patients;
            }
        }
    }
?>