<?php
require_once('../app/config/config.php');
require_once APP_ROOT . '/app/libs/DBconnection.php';

// routing
// Biến $controller được gán giá trị là tên controller dựa trên giá trị của tham số controller trong URL. Nếu không có tham số này, mặc định sẽ là HomeController.

// Biến $action được gán giá trị là tên action dựa trên giá trị của tham số action trong URL. Nếu không có tham số này, mặc định là index.

$controller = ucfirst(isset($_GET['controller'])? $_GET['controller']:'home').'Controller'; 
// echo $controller;
$action = isset($_GET['action'])? $_GET['action']:'index';
echo $action;

// lùi lại 1 cấp
$controllerPath = '../app/controllers/'.$controller.'.php';
// echo $controllerPath;

//nếu không tồn tại tệp trong thư mục controller thì dừng và đưa ra thông báo
if(!file_exists($controllerPath)){
    die('Tệp tin không tồn tại');
}

//nếu có tồn tại tệp trong controller
require_once($controllerPath);

//khởi tạo ra đối tượng controller và gọi đến phương thức tương ứng với giá trị của acction
$myObj = new $controller();
$myObj->$action();
?>

<!-- phải đi từ tệp gốc -->