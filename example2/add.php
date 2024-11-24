
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Thêm Sản Phẩm</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Thêm Mới Sản Phẩm</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="add.php">Thêm mới sản phẩm</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <form action="product.php" method="POST">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" required>

            <label for="price">Giá thành:</label>
            <input type="text" id="price" name="price" required>

            <button type="submit">Thêm sản phẩm</button>
        </form>
    </main>
</body>
</html>