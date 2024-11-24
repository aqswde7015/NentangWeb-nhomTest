<?php
$products = [
    ['name' => 'Sản phẩm 1', 'price' => '1000'],
    ['name' => 'Sản phẩm 2', 'price' => '2000'],
    ['name' => 'Sản phẩm 3', 'price' => '3000']
];

// ADD PRODUCT
// Bắt đầu session để sử dụng session
session_start();

// Kiểm tra xem đã có sản phẩm trong session chưa, nếu chưa thì tạo một mảng trống
if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = $products;
}

// Kiểm tra xem form đã được gửi chưa
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin sản phẩm từ form
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

   // Thêm sản phẩm vào session
$newProduct = ['name' => $productName, 'price' => $productPrice];
array_push($_SESSION['products'], $newProduct);

    // Sau khi thêm sản phẩm, chuyển hướng về trang index.php để hiển thị bảng sản phẩm
    header('Location: index.php');
    exit(); // Dừng mã sau khi chuyển hướng
}
?>

