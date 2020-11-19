<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User request</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <?php include("includes/header_bar.php"); ?>
      <div class="admin-content">

        <div class="content">
          <h2 class="page-title" style="text-align: center; margin-bottom: 1.1rem">User Requests</h2>

          <table>
            <thead>
              <th>Sn</th>
              <th>User_reg_id</th>
              <th>name</th>
              <th>Recipe_title</th>
              <th colspan="3">Actions</th>
            </thead>

            <tbody>
            <?php include ("connection.php");?>

            <?php

               $sql="select * from user_request";
               $query=mysqli_query($conn,$sql);
               while($res=mysqli_fetch_array($query)){
                ?>
                   
                <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['user_reg_id']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['recipe_title']; ?></td>
                <td><a href="request_add.php?id=<?=$res["id"]?>" class="view">Add</a></td>
                
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