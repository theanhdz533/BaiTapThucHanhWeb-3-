<?php
    $sum=0;
    $mul=0;
    $sumEven=0;
    $sumOdd=0;
    
     if (empty($_POST['num_start']) || (empty($_POST['num_end']))){
        echo '<h3 style="color:red;">';
        echo  'Enter number !';
        echo '</h3>';
     }
     else {
        $num_start = $_POST['num_start'];
        $num_end   = $_POST['num_end'];
        if ($num_end<$num_start){
            echo '<h3 style="color:red;">';
            echo 'Number End Smaller Number Start!';
            echo '</h3>';
        }
        else {
            for ($i=$num_start;$i<=$num_end;$i++){
                $sum+=$i;
                $mul*=$i;
                if ($i % 2 ==0){
                    $sumEven += $i;
                }
                else {
                    $sumOdd += $i;
                }
            }
        }
     }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>

<body>
    <form action="bai4.php" method="post">
        <table border="2">
            <tbody>
                <tr>
                    <td>Number Start</td>
                    <td><input type="number" name="num_start"></td>
                    <td>Number End</td>
                    <td><input type="number" name="num_end"></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center; color:Black; font-size:30px; font-weight:bold;">Reslut</td>
                </tr>
                <tr>
                <td colspan="2" style="color:Black; font-size:20px;font-weight:bold;">Number Start: <?php 
                if (isset($_POST['num_start'])){
                    $_POST['num_start'];
                }
                 ?></td>
                <td colspan="2" style="color:Black; font-size:20px;font-weight:bold;">Number End: 
                <?php 
               if (isset($_POST['num_end'])){
                $_POST['num_end'];
            }
                ?></td>
                </tr>
                <tr>
                    <td>Sum</td>
                    <td colspan="3"><?php echo $sum; ?></td>
                </tr>
                <tr>
                    <td>Multiplication</td>
                    <td colspan="3"><?php echo $mul; ?></td>
                </tr>
                <tr>
                    <td>Sum Even Number</td>
                    <td colspan="3"><?php echo $sumEven; ?></td>
                </tr>
                <tr>
                    <td>Sum Even Odd</td>
                    <td colspan="3"><?php echo $sumOdd; ?></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: center;"><button type="submit">Tính</button></td>        
                </tr>
            </tbody>
        </table>
        
    </form>
</body>

</html>