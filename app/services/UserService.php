<?php
require_once APP_ROOT .'/app/models/User.php';

    class UserService{
        public function getAll($sql){
            $database = new DBconnection();
            $pdo = $database->getConnection();   //khởi tạo đối tượng PDO
            $stmt = $pdo->query($sql);
    
            $users = [];
            while($row = $stmt->fetch()){
                $user = new User($row['id_user'],$row['gmaildangnhap_user'],$row['matkhau_user'],$row['id_vaitro']);
                array_push($users,$user);
            }
            $pdo=null; //đóng kết nối
            return $users;
        }
    }
?>