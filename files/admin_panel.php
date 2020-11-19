<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link type="text/css" href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
<?php include("includes/header_bar.php"); ?>
  
      <div class="admin-content">
        <div >
          <a href="add_recipes.php" class="btn btn-big btn-info ">Add Recipes</a>
          <a href="desert.php" class="btn btn-big btn-info">Deserts</a>
          <a href="breakfast.php" class="btn btn-big btn-info">Breakfast</a>
        </div>
        <br>

        <div class="content">
          <h2 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Recipes</h2>

          <table>
            <thead>
              <th>Sn</th>
              <th>Name</th>
              <th colspan="3">Action</th>
            </thead>

            <tbody>
            <?php include ("connection.php");?>

            <?php

                $sql="select * from recipes";
                $query=mysqli_query($conn,$sql);
                while($res=mysqli_fetch_array($query)){
            ?>
       
                  <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['title']; ?></td>
                  <td><a href="view_recipe.php?id=<?=$res["id"]?>" class="view">View</a></td>
                  <td><a href="edit_recipe.php?id=<?=$res["id"]?>" class="edit">edit</a></td>
                  <td><a href="delete_recipe.php?id=<?=$res["id"]?>" class="delete">Delete</a></td>
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