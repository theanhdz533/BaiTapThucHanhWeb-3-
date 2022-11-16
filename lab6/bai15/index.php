<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div id="binhchon">
        <form id="form1" name="form1" method="get" action="xulybinhchon.php">
            <p>
                <?php
                require_once("./config.php");
                $s = "select * from phuongan where idBC=1";
                $kq = mysqli_query($config, $s);
                $i = 0;
                while ($row = mysqli_fetch_array($kq)) {
                }
                ?>
                <label>
                    <input id="radio" type="radio" value="<?php echo $row['idPA']; ?>" name="idPA" <?php if ($i == 0) {
                                                                                                        echo " checked='checked' ";
                                                                                                        $i++;
                                                                                                    } ?> />

                </label>
                <?php echo $row['MoTa']; ?><br /><?php ?>
            </p>
            <p>
                <label>
                    <input id="button" type="submit" value="Xem kết quả" name="Submit" />
                </label>

            </p>
        </form>
    </div>
</body>

</html>