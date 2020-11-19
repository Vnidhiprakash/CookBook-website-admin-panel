
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
          
          
        </div>
        <br>
        <?php 
            
            session_start();
            include "connection.php";
            
            $userid=$_SESSION['userid'];
            $sql=("select * from user_registration where user_reg_id='$userid'");
            $result=mysqli_query($conn,$sql);
            $arrdata = mysqli_fetch_array($result);    
          ?>
        <div class="content">
          <h4 class="page-title" style="text-align: center; margin-bottom: 1.1rem">Request</h4>
          
            <form action="" method="POST" enctype="multipart/form-data">
            
            
            <input type="text" name="id" class="text-input" value="<?php echo $arrdata['user_reg_id']?>"/>
            <label>Name</label>
                 <input type="text" name="name" class="text-input" value="<?php echo $arrdata['name']?>"/>
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
        $id=mysqli_real_escape_string($conn,$_POST['id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $title=mysqli_real_escape_string($conn,$_POST['title']);
        $tip=mysqli_real_escape_string($conn,$_POST['tip']);
        $file=$_FILES['image'];
        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror=$file['error'];

        if($fileerror == 0){
          $destfile = 'upload/'.$filename;
          move_uploaded_file($filepath,$destfile);
        
        
        $sql="insert into user_request (id,user_reg_id,name,recipe_title,image,recipe) values('','$id','$name','$title','$destfile','$tip')";
        
 
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