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

    <div class="admin-content">
        <div >
          <a href="add_tips.php" class="btn btn-big btn-info ">Add More</a>
        </div>
        <br>

      <div class="content">
          <h4 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Add Recepies</h4>
            <form action="" method="POST" enctype="multipart/form-data">
            <div>
                 <label>Title</label>
                 <input type="text" name="title" class="text-input"/>
            </div>
            <br>

            <div>
               <label>Image</label>&nbsp;
               <input type="file" name="image" value="" onchange="loadfile(event)" />
                <img id="preview_img" width="100px" height="150px">
               <script type="text/javascript">
                   function loadfile(event){
                     var output=document.getElementById('preview_img');
                     output.src=URL.createObjectURL(event.target.files[0]);
                   };

               </script>
            </div>
              
            <div>
                <label>Type</label>
                <select name="Type" class="text-input">
                  <option value="Desert">Desert</option>
                  <option value="Breakfast">Breakfast</option>
                </select>
            </div>

              <br>
              <br>
              <div>
                 <label>Post</label>
                 <textarea name="tip" id="editor" cols="30" rows="10" value=""></textarea>
              </div>
              
              <div>
                <button name="submit" type="submit" class="btn btn-big btn-info">Submit</button>
              </div>
            </form>
        </div>
        </div>

    <?php include("connection.php"); ?>
    <?php
      if(isset($_POST['submit'])){
        $title=mysqli_real_escape_string($conn,$_POST['title']);
        $tip=mysqli_real_escape_string($conn,$_POST['tip']);
        $type=mysqli_real_escape_string($conn,$_POST['Type']);
        $file=$_FILES['image'];
        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror=$file['error'];

        if($fileerror == 0){
          $destfile = 'upload/'.$filename;
          move_uploaded_file($filepath,$destfile);
               
        $sql="insert into recipes (id,title,type,image,recipe) values('','$title','$type','$destfile','$tip')";
        
        if(mysqli_query($conn,$sql)){
          echo '<script>alert("Saved Successfully")</script>';
        }
        else{
          echo "error" .mysqli_error($conn);
        }
      }  
        mysqli_close($conn);
      }
    ?>
   
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="script.js"></script>
</body>
</html>