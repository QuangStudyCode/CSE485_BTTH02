<?php
require_once('../app/services/SinhVienService.php');
require_once('../app/services/UserService.php');
class HomeController
{
    public function index()
    {
        $sinhvienSV = new SinhVienService();
        // $categoryService = new CategoryService();
        include APP_ROOT .'/app/views/home/login.php';
    }
    
    public function login()
    {
        $userService = new UserService();
        session_start();

        if (isset($_POST['btn'])) {
            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $result = $userService->getAll('select * from user where gmaildangnhap_user ="' . $user . '" and matkhau_user = "' . $pass . '"');
            
            if (count($result) > 0) {
                // if (isset($_POST['save_pass'])) {
                //     setcookie('tennguoidung', $user, time() + 3600, '/', '', 0, 0);
                //     setcookie('matkhau', $pass, time() + 3600, '/', '', 0, 0);
                // }
                $_SESSION['login'] = $user;
                header("location: /app/views/home/admin/index.php");
                echo 'đăng nhập thành công';
            } else {
                $mess = "tài khoản không tồn tại. Vui lòng kiểm tra lại thông tin đăng nhập";
                header("location:?action=login&notification=" . $mess);
            }
        }
        // include("views/homes/login.php");
        include APP_ROOT .'/app/views/home/login.php';
    }
}
?>