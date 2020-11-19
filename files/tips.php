<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tips</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <?php include("includes/header_bar.php"); ?>
    
    <div class="admin-content">
        <div >
          <a href="add_tips.php" class="btn btn-big btn-info ">Add Tips</a>
        </div>
        <br>

        <div class="content">
          <h2 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Tips</h2>

          <table>
            <thead>
              <th>Sn</th>
              <th>Title</th>
              <th colspan="3">Actions</th>
            </thead>

            <tbody>
            <?php include ("connection.php");?>

            <?php

               $sql="select * from tips";
               $query=mysqli_query($conn,$sql);
               while($res=mysqli_fetch_array($query)){
                ?>
                   
                <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['title']; ?></td>
                <td><a href="view_tips.php?id=<?=$res["id"]?>" class="view">View</a></td>
                <td><a href="edit_tips.php?id=<?=$res["id"]?>" class="edit">edit</a></td>
                <td><a href="delete_tips.php?id=<?=$res["id"]?>" class="delete">Delete</a></td>
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