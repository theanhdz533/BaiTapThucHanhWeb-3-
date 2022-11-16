<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="template/css.css" type="text/css">
</head>

<body>
    <div id="container">
        <header>
            <a href="index.php">COMPUTER ABC</a>
        </header>

    </div>
    <div id="main-wrapper">
        <div id="product-info">
            <?php echo $html ?>
        </div>
        <div id="rating">
            <form action="view-product.php" method="post">
                <h2>Đánh giá</h2>
                <input type="radio" name="rate" value="5" checked>5
                <input type="radio" name="rate" value="4" >4
                <input type="radio" name="rate" value="3" >3
                <input type="radio" name="rate" value="2">2
                <input type="radio" name="rate" value="1">1
                <input type="submit" name="rate_submit" value="Rate" id="submit-button">
            </form>
        </div>
    </div>
</body>

</html>