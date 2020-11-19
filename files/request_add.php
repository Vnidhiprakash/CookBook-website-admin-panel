<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tips</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
       
<?php include("includes/header_bar.php"); ?>

      <div class="admin-content">
        
        <br>

        <div class="content">
          <h4 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Add Requests</h4>
            <form action="user_request_page" method="POST">
            <?php 
                include "connection.php";
                $ids = (isset($_GET['id']) ? $_GET['id'] : '');
                $sql=("select * from user_request where id='$ids'");
                $result=mysqli_query($conn,$sql);
                $arrdata = mysqli_fetch_array($result);
                
            ?>
            <input type="hidden" name="id" value="<?php echo $arrdata['user_reg_id'];?>" class="text-input"/>
            <div>
                 <label>Name</label>
                 <input type="text" name="name" value="<?php echo $arrdata['name'];?>" class="text-input"/>
                </div>
              <div>
            
               <div>
                 <label>Title</label>
                 <input type="text" name="recipe_title" value="<?php echo $arrdata['recipe_title'];?>" class="text-input"/>
                </div>
              <div>
                <br>
              <label>Image</label>&nbsp;
              <input type="text" name="image" value="<?php echo $arrdata['image'];?>" />
              </div>

              <br>
              <div>
                 <label>Recipe</label>
                 <textarea name="recipe" id="editor" cols="30" rows="10"> <?php echo $arrdata['recipe']?> </textarea>
                 <!--<textarea name="tip" id="editor" cols="30" rows="10" value="<?php echo $arrdata['tip'];?>"></textarea> -->             
                </div>
                <br>
              <div>
                <button name="submit" type="submit" class="btn btn-big btn-info">Add</button>
              </div>
        </form>
        </div>
        </div>
        <?php include("connection.php"); ?>
    <?php

      if(isset($_POST['submit'])){

        $id=mysqli_real_escape_string($conn,$_POST['id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $title=mysqli_real_escape_string($conn,$_POST['recipe_title']);
        $image=mysqli_real_escape_string($conn,$_POST['image']);
        $recipe=mysqli_real_escape_string($conn,$_POST['recipe']);
          
        $sql="insert into user_recipe (id,user_reg_id,name,title,image,recipe) values('','$id','$name','$title','$image','$recipe')";
        
        if(mysqli_query($conn,$sql)){
          echo '<script>alert("Saved Successfully")</script>';
        }
        else{
          echo "error" .mysqli_error($conn);
        }
        mysqli_close($conn);
      }
    ?>

    
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="script.js"></script>
    
</body>
</html>