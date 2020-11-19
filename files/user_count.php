<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User count</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <?php include("includes/header_bar.php"); ?>
    
      <div class="admin-content">
        <br>

        <div class="content">
          <h2 class="page-title" style="text-align: center; margin-bottom: 1.1rem">User count</h2>

          <table>
            <thead>
              <th>Sn</th>
              <th>Title</th>
              <th colspan="3">Email-id</th>
            </thead>

            <tbody>
            <?php include ("connection.php");?>

            <?php

               $sql="select * from user_registration";
               $query=mysqli_query($conn,$sql);
               while($res=mysqli_fetch_array($query)){
                ?>
                   
                <tr>
                <td><?php echo $res['user_reg_id']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['email']; ?></td>
                <td><a href="user_request_count.php?id=<?=$res["user_reg_id"]?>" class="view">View Requset</a></td>
                
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