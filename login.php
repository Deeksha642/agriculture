<?php
    require './includes/common.php';
    // if(isset($_SESSION['email'])){
    //     header('location:home.php');
    // }
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
        <title>Agriculture | login page</title>
        <style>
            .banner_image {
         padding-top: 75px;
/* padding-bottom: 50px; */
text-align: center;
color: #f8f8f8;
background: url(./img/back.jpg) no-repeat center center;
background-size: cover;
height: 750px;
}
            .top_margin{
                margin-top: 90px;
            }
            </style>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
        <div class="content">
            <div class="banner_image">
            <div class="container">
                <div class="row top_margin">
                <div class="col-md-4 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><center><h3>Login</h3></center></div>
                        <div class="panel-body">
                            <form action="login_script.php" method="POST" >
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>   
                                </div>
                                <div class="form-group">
                    <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>
                                <div class="btn-signup">
                                    <button type="submit" name="submit" class="btn btn-success">Login</button>  
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p style="color: #101010">Don't have an account?<a href="signup.php">Register</a></p>
                        </div>
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
