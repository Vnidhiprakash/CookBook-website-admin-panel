<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tips</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
       
<?php include("includes/header_bar.php"); ?>

      <div class="admin-content">
        
        <br>

        <div class="content">
          <h2 class="page-title" style="text-align: center; margin-bottom: 1.1rem"><u>Here's The Entire Tip</u></h2>
           
            <?php 
                include "connection.php";
                $ids = (isset($_GET['id']) ? $_GET['id'] : '');
                $sql=("select * from tips where id='$ids'");
                $result=mysqli_query($conn,$sql);
                $arrdata = mysqli_fetch_array($result);
                
            ?>
            
               <div>
                 <h3><?php echo $arrdata['title'];?></h3>
                 
                </div>
              <div>
                <br>
              <img src="<?php echo $arrdata['image']?>" height="150" width="200">&nbsp;
              </div>
              <br>
              <div>
                 <p><?php echo $arrdata['tip'];?></p>
                 
              </div>
              
        </form>
        </div>
        </div>
</body>
</html>