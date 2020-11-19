<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tips</title>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
     <div class="logo">
      <h1 class="logo-text"><span>cook</span>book</h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li>
         <a href="#">
           <i class="fa fa-user">Admin</i>
           <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
        </a>
      
      <ul>
        <li><a href="#" class="logout">logout</a></li>
      </ul>
      </li>
      </ul>
    </header>


    <div class="admin-wrapper">
      <div class="left-sidebar">
        <ul>
          <li><a href="admin_panel.php" class="active">Recipes</a></li>
          <li><a href="tips.php">Tips</a></li>
          <li><a href="user_request_page.php">User Requests</a></li>
          <li><a href="user_count.php">User Counts</a></li>
        </ul>
      </div>
</body>
</html>