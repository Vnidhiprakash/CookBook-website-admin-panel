<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" />
</head>
<body>
       
<?php include("includes/header_bar.php"); ?>

      <div class="admin-content">
        
        <br>

        <div class="content">
          <h4 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Update Recipes</h4>
            <form action="edit_recipe.php" method="POST" enctype="multipart/form-data">
            <?php 
                include "connection.php";
                $ids = (isset($_GET['id']) ? $_GET['id'] : '');
                $sql=("select id,title,image,recipe from recipes where id='$ids'");
                $result=mysqli_query($conn,$sql);
                $arrdata = mysqli_fetch_array($result);
                
            ?>
                 <div>
                 <input type="hidden" name="id" value="<?php echo $arrdata['id'];?>"/>
                 </div>
               <div>
                 <label>Title</label>
                 <input type="text" name="title" value="<?php echo $arrdata['title'];?>" class="text-input"/>
                </div>
              <div>
                <br>

                <div>
                <br>
              <label>Image</label>&nbsp;
              <input type="file" name="image" value="<?php echo $arrdata['image'];?>" />
              </div>

              <br>
              <div>
                 <label>Post</label>
                 <textarea name="recipe" id="editor" cols="30" rows="10"> <?php echo $arrdata['recipe']?> </textarea>
              </div>
              <br>
              <div>
                <button name="update" type="submit" class="btn btn-big btn-info">Update</button>
              </div>
        </form>
        </div>
        </div>
      
        <?php 
        if(isset($_POST['update'])){
          $ids=mysqli_real_escape_string($conn,$_POST['id']);
          $title=mysqli_real_escape_string($conn,$_POST['title']);
          $file=$_FILES['image'];
          $filename=$file['name'];
          $filepath=$file['tmp_name'];
          $fileerror=$file['error'];
          $recipe=mysqli_real_escape_string($conn,$_POST['recipe']);

          if($fileerror == 0){
            $destfile = 'upload/'.$filename;
            move_uploaded_file($filepath,$destfile);
          

          $sql= "UPDATE recipes SET title='$title', image='$destfile', recipe='$recipe' WHERE id='$ids' ";
          if(mysqli_query($conn,$sql)){
            echo '<script>alert("Saved Successfully")</script>';
          }
          else{
            echo "error" .mysqli_error($conn);
          }
        }
        }
?>

    
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="script.js"></script>
    
</body>
</html>