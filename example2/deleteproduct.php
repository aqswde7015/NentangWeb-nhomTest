<?php
// Bắt đầu session
session_start();

// Kiểm tra xem tham số 'key' có được truyền qua GET không
if (isset($_GET['key'])) {
    $key = $_GET['key'];

    // Kiểm tra xem key có tồn tại trong danh sách sản phẩm không
    if (isset($_SESSION['products'][$key])) {
        // Xóa sản phẩm khỏi danh sách
        unset($_SESSION['products'][$key]);

        // Sắp xếp lại mảng để tránh key bị lỗ hổng
        $_SESSION['products'] = array_values($_SESSION['products']);
    }
}

// Quay lại trang index.php
header('Location: index.php');
exit();
?>
