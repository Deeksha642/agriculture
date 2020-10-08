<?php
  include './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agriculture | index page</title>
        <style>
             .banner_image {
         padding-top: 75px;
/* padding-bottom: 50px; */


background: url(./img/back.jpg) no-repeat center center;
background-size: cover;
height: 750px;
}
.banner{
    background-size: 10px;
}
            .top_margin{
                margin-top: 100px;
            }
        </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
        
        <div class="content" >
            <div class="banner_image">
            <div class="container-fluid">
                
                <div class="row top_margin">
                    
                    <div class="col-md-7">
                       
                        <h2 class="p-bold">Contact Us</h2>
                         <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
                    </div>
                    <div class="col-md-4">
                        <img src="./img/hourr.gif" class="img-responsive live-support-img" alt="Live Support">
                    </div>
                    <div class="col-md-4">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">500, Kanchan Park Lorem, ipsum dolor sit amet consectetur,</p>
                  <p class="text-muted">12-568-875 Lorem ipsum dolor sit,</p>
                  <p class="text-muted">INDIA,karnataka</p>
                  <p class="text-muted">Phone : +91-91000000000</p>
                  <p class="text-muted">Email : agricultural@shoppee.com</p>
                  <p class="text-muted">Follow On: <a href="https://www.instagram.com/indian_agriculture/"><i class="fa fa-instagram">Instagram</i></a> </p>                  
                </div>
              </div>
                </div>
                
            </div>
        </div>
        </div>
        
        <?php
        include './includes/footer.php';
        ?>
    </body>
</html>