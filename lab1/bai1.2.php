<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1.2</title>
</head>
<body>
    <?php 
      if (isset($_POST["your_name"])){
        $name = "Hello: ".$_POST["your_name"];
      }
       else{
        echo "<style>h1{display:none;}</style>";
      }
     
    ?>
    <form action="bai1.2.php" method="post">
        <table border="1">
           <thead>
            <tr>
                <th>Hello every one!</th>
            </tr>
           </thead>
           <tbody>
            <tr>
                <td>Enter your name:</td>
                <td><input type="text" name="your_name"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Send"></td>
            </tr>
           </tbody>
        </table>

        <h1><?php echo $name ?></h1>
    </form>
</body>
</html>