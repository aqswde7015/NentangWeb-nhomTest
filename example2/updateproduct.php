<?php
// Bắt đầu session
session_start();

// Kiểm tra dữ liệu POST (cập nhật thông tin sản phẩm)
if (isset($_POST['key'], $_POST['name'], $_POST['price'])) {
    $key = $_POST['key'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Kiểm tra xem sản phẩm có tồn tại trong session không
    if (isset($_SESSION['products'][$key])) {
        // Cập nhật thông tin sản phẩm
        $_SESSION['products'][$key]['name'] = $name;
        $_SESSION['products'][$key]['price'] = $price;
    }
}

// Chuyển hướng về trang index.php sau khi cập nhật
header('Location: index.php');
exit();
