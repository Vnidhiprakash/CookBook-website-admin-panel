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
        
        <div class="content">
          <h4 class="page-title" style="text-align: center; margin-bottom: 1.1rem">User Request Count</h4>

          <br>

          <table>
            <thead>
              <th>Sn</th>
              <th>user_id</th>
              <th>User Name</th>
              <th>Recipe Title</th>
              
            </thead>

            <tbody>
            <?php include ("connection.php");?>

            <?php
               $ids = (isset($_GET['id']) ? $_GET['id'] : '');
               $sql="select * from user_request where user_reg_id='$ids'";
               $query=mysqli_query($conn,$sql);
               while($res=mysqli_fetch_array($query)){
                ?>
                   
                <tr>
                <td><?php echo $res['id']; ?></td>   
                <td><?php echo $res['user_reg_id']; ?></td>
                <td><?php echo $res['name']; ?></td>
                <td><?php echo $res['recipe_title']; ?></td> 
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