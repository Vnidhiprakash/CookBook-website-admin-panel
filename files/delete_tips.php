<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tips</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
       
<?php include("includes/header_bar.php"); ?>

    <?php include("connection.php"); ?>
    <?php
      
        
        $ids = (isset($_GET['id']) ? $_GET['id'] : '');
        $sql="delete from tips where id='$ids'";
        
 
        if(mysqli_query($conn,$sql)){
          echo '<script>alert("deleted Successfully")</script>';
          header('Location:tips.php');
        }
        else{
          echo "error" .mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>