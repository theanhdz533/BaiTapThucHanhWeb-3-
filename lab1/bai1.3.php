<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1.3</title>
</head>

<body>
    <?php
    if (isset($_POST["a"]) && isset($_POST["b"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        if ($a == 0) {
            if ($b == 0)
                $nghiem = "Phương trình có vô số nghiệm";
            if ($b <> 0)
                $nghiem = "Phương trình vô nghiệm";
        } else {
            $x = - ($b / $a);
            $x = round($x, 2);
            $nghiem = "x= $x";
        }
    }
    ?>

    <h1>Giải Phương Trình Bậc Nhất</h1>
    <form action="bai1.3.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>Phương Trình</td>
                    <td><input type="number" name="a"></td>
                    <td>X+</td>
                    <td><input type="number" name="b"></td>
                    <td>=0</td>
                </tr>
                <tr>
                    <td> <input type="submit" value="Tính"> </td>
                    <td>Nghiệm là: </td>
                    <td><?php if (isset($nghiem)) echo $nghiem ?></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>