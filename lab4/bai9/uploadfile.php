<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<?php
    $target_path="images/";

    if(isset($_FILES['ufile'])){
        $target_path= $target_path.basename($_FILES['ufile']['name']);
    }

  /*  !preg_match('/\.(jpg|gif)$/i',basename($_FILES['ufile']['name']))*/
    if(!preg_match('/\.(jpg|gif)$/i',basename($_FILES['ufile']['name'])) ){
        echo "Khong phai file anh";
    }elseif (file_exists($target_path)) {
        # code...
        echo basename($_FILES['ufile']['name']." already exits. ");
    }elseif (move_uploaded_file($_FILES['ufile']['tmp_name'],$target_path)) {
        # code...
        echo "The file".basename($_FILES['ufile']['name'])." has been uploaded";
    }else{
        echo "There was an error!";
    }

?>
<body>
    <form action="uploadfile.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
        <label>Upload
            <input type="file" name="ufile" id="ufile" />
        </label>
        <p>

            <input type="submit" name="upload" id="upload" value="Up load" />

        </p>
    </form>
</body>

</html>