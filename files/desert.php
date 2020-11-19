<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link type="text/css" href="style.css" rel="stylesheet" />
</head>
<body>
    
<?php include("includes/header_bar.php"); ?>
      <div class="admin-content"> 
        <br>
        <div class="content">
          <h2 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Desserts</h2>

          <table>
            <thead>
              <th>Sn</th>
              <th>Name</th>
              <th colspan="3">Action</th>
            </thead>

            <tbody>
            <?php include ("connection.php");?>

            <?php

                $sql="select * from recipes where type='Desert'";
                $query=mysqli_query($conn,$sql);
                while($res=mysqli_fetch_array($query)){
            ?>
       
                  <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['title']; ?></td>
                  <td><a href="view_recipe.php?id=<?=$res["id"]?>" class="view">View</a></td>
                  <td><a href="edit_recipe.php?id=<?=$res["id"]?>" class="edit">edit</a></td>
                  <td><a href="delete" class="delete">Delete</a></td>
                  </tr>
              <?php
                 }
                 ?>
            </tbody>
          </table>
        </div>
        </div>
</body>
</html>