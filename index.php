<?php
    include './includes/common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
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
text-align: center;
color: #f8f8f8;
background: url(./img/backjpg.jpg) no-repeat center center;
background-size: cover;
height: 750px;
}
.inner_banner_image{
    padding-top: 12%;
    width: 80%;
    margin: auto;
}
#banner_content{
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 12%;
    background-color: rgba(0, 0, 0, 0.7);
    max-width: 660px;
}


</style>
        <link  rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        ?>
       
          
        
            <div class="content">
                <div class="banner_image">
                     <div class="container-fluid">
                <img class="pure img-circle" src="./img/100.png" alt="">
               
                   <center>
                       <div id="banner_content">                  	
                           <h1 class="p-bold">Fresh Fruits...</h1>
                    <h4 class="p-bold" >Freshly grown for clients</h4>
                    
                    <br/>
                    <a href="signup.php" class="btn btn-success btn-lg active">Shop Now</a>                                       
                  </div> 
                   </center>
           
                 <div class="row" >
           <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="./img/tender.jpg" class="img-responsive img-phone" alt="">
                <div class="caption">
                    <h3>Coconut</h3>
                </div>
                </div>
            </div>
                     <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <img src="./img/tomatoes1.jpg" class="img-responsive img-phone" alt="">
                     <div class="caption">
                         <h3>Tomato</h3>
                     </div>
                </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <img src="./img/Mint.jpg" class="img-responsive img-phone" alt="">
                     <div class="caption">
                         <h3>Mint</h3>
                     </div>
                </div>
                     </div>
                      
                     <div class="col-md-3 col-sm-6">
                 <div class="thumbnail">
                     <img src="./img/watermelon.jpg" class="img-responsive img-phone" alt="">
                     <div class="caption">
                         <h3>Watermelon</h3>
                     </div>
                </div>
                     </div>
            </div>
        </div>
            </div>
            </div>
        <?php
            include 'aboutus.php';
        ?>
        
       
        <?php
        include './includes/footer.php';
        ?>
        
    </body>
</html>
