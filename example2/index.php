
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="js.js"></script>
    <title>Administration</title>
</head>
<body>
    <?php include 'product.php'; ?> 

    <header>
        <div class="header-container">
            <h1>Administration</h1>
            <nav>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Trang ngoài</a></li>
                    <li><a href="#">Thể loại</a></li>
                    <li><a href="#"><span class="black">Tác giả</span></a></li>
                    <li><a href="#">Bài viết</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
<button><a href="add.php">Thêm mới</a></button>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá thành</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <?php if (isset($_SESSION['products']) && !empty($_SESSION['products'])): ?>
    <tbody>
    <?php foreach ($_SESSION['products'] as $key => $product): ?>           
         <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?> VND</td>
                <td><a href="edit.php?key=<?php echo $key; ?>">✏️</a></td>
                <td><a href="deleteproduct.php?key=<?php echo $key; ?>" class="delete-product">🗑️</a></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
<?php endif; ?>
        </table>
    </main>
    <footer>
        <hr>
        <p>TLU'S MUSIC GARDEN</p>
    </footer>
</body>
</html>
