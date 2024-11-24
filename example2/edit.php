<?php
// Bắt đầu session
session_start();

// Kiểm tra tham số `key` trong URL (kiểm tra sản phẩm có tồn tại không)
if (!isset($_GET['key']) || !isset($_SESSION['products'][$_GET['key']])) {
    // Nếu không tìm thấy sản phẩm, quay lại trang index.php
    header('Location: index.php');
    exit();
}

// Lấy thông tin sản phẩm cần sửa
$key = $_GET['key'];
$product = $_SESSION['products'][$key];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <header>
        <h1>Sửa sản phẩm</h1>
    </header>
    <main>
        <!-- Form chỉnh sửa sản phẩm -->
        <form action="updateproduct.php" method="POST">
            <!-- Ẩn key để gửi qua POST -->
            <input type="hidden" name="key" value="<?php echo $key; ?>">

            <label for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>

            <label for="price">Giá thành:</label>
            <input type="text" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required>

            <button type="submit">Cập nhật</button>
        </form>
        <a href="index.php">Quay lại</a>
    </main>
</body>
</html>
