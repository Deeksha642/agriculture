<?php
    include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agriculture | setting page</title>
        <link  rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <?php
        require './includes/header.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
          <div class="container">
          <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default-setting">
              <div class="panel-heading" style="padding-top: 110px">
              <h2 class="text-center">Change Password</h2>
            </div>
            <div class="panel-body">
                <form action="settings_script.php" method="POST">
                  <div class="form-group">
                    <label for="oldPassword">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" required>                    
                  </div>
                  <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" name="newPassword" required>
                  </div>
                  <div class="form-group">
                    <label for="newPasswordRe">Re-type New Password</label>
                    <input type="password" class="form-control" name="newPasswordRe" required>                    
                  </div>
                  <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                  <input type="submit" class="btn btn-setting btn-block" value="Confirm">
                </form>
            </div>
          </div>
          </div>
          </div>
        </div>
    <!-- !Main -->

    <!-- Footer -->
    <?php
        require './includes/footer.php';
    ?>  
    <!-- !Footer -->
</body>
</html>