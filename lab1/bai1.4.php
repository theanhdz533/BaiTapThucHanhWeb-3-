<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1.4</title>
</head>

<body>
    <?php
       $chu =""; 
       $check = "";
        if (isset($_POST["so"])){
            if ((($_POST["so"]) >9) || (($_POST["so"])<0)){
                $check = "Error!";
           }
            switch ($_POST["so"]){
                case 0: $chu = "zero"; break;
                case 1: $chu = "one"; break;
                case 2: $chu = "two"; break;
                case 3: $chu = "three"; break;
                case 4: $chu = "four"; break;
                case 5: $chu = "five"; break;
                case 6: $chu = "six";  break;
                case 7: $chu = "seven";  break;
                case 8: $chu = "eight"; break;
                case 9: $chu = "nine";  break;
            }


            
        }
    ?>
    <h1>Enter Number</h1>
    <form action="bai1.4.php" method="post">
        <table width="519" border="1">
            <tr>
                <td colspan="3">Đọc số</td>
            </tr>
            <tr>
                <td>Nhập số (0-9)</td>
                <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
                <td> Bằng chữ</td>
            </tr>
            <tr>
                <td width="177">
                    <p>
                        <label for="textfield"></label>
                        <input type="number" name="so" id="textfield" />
                    </p>
                </td>
                <td width="232"><label for="textfield2"></label>
                    <input type="text" name="chu" id="textfield2" value="<?php echo $chu; ?>" />
                </td>
            </tr>
        </table>
        <h1> <?php echo $check; ?> </h1>

    </form>
</body>

</html>