<?php
include './includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agriculture | home page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        include './includes/header.php';
        include './includes/check_if_added.php';
        ?>
        <div class="content">
            <div class="container">
                <div class="jumbotron text-center" style="margin-top: 70px ;  ">
                    <p style="font-weight:bold;">Welcome!!!</p>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/apple.jpg"  alt="">
                        <div class="caption">
                            <h3>Apple</h3>
                            <p>Price: Rs. 100.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/aracnut.jpg" alt="">
                        <div class="caption">
                            <h3>Arecanut</h3>
                            <p>Price: Rs. 200.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/black pepper.jpg" alt="">
                        <div class="caption">
                            <h3>Black Pepper</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(3)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/capsicum.jpg" alt="">
                        <div class="caption">
                            <h3>Capsicum</h3>
                            <p>Price: Rs. 140.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(4)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/chilli.jpg" alt="">
                        <div class="caption">
                            <h3>Chilli</h3>
                            <p>Price: Rs. 105.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(5)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/coriander.jpg" alt="">
                        <div class="caption">
                            <h3>Coriander</h3>
                            <p>Price: Rs. 11.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(6)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/grapes.jpg" alt="">
                        <div class="caption">
                            <h3>Grapes</h3>
                            <p>Price: Rs. 80.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(7)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/green apple.jpg" alt="">
                        <div class="caption">
                            <h3>Green apple</h3>
                            <p>Price: Rs. 438.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(8)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                   
                        </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/guava.jpg" alt="">
                        <div class="caption">
                            <h3>Guava</h3>
                            <p>Price: Rs. 60.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(9)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/lemon.jpg" alt="">
                        <div class="caption">
                            <h3>Lemon</h3>
                            <p>Price: Rs. 20.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(10)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/mint_1.jpg" alt="">
                        <div class="caption">
                            <h3>Mint</h3>
                            <p>Price: Rs. 10.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(11)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/onion.jpg" alt="">
                        <div class="caption">
                            <h3>Onion</h3>
                            <p>Price: Rs. 42.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(12)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                        </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/orange.jpg" alt="">
                        <div class="caption">
                            <h3>Orange</h3>
                            <p>Price: Rs. 79.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(13)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/rice.jpg" alt="">
                        <div class="caption">
                            <h3>Rice</h3>
                            <p>Price: Rs. 40.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(14)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/tomato.jpg" alt="">
                        <div class="caption">
                            <h3>Tomato</h3>
                            <p>Price: Rs. 41.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(15)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/watermelon1.jpg" alt="">
                        <div class="caption">
                            <h3>Watermelon</h3>
                            <p>Price: Rs. 68.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(16)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/wheat flour.jpg" alt="">
                        <div class="caption">
                            <h3>Wheat flour</h3>
                            <p>Price: Rs. 359.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(17)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/wheat.jpeg" alt="">
                        <div class="caption">
                            <h3>Wheat </h3>
                            <p>Price: Rs. 220.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(18)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/banana.jpg" alt="">
                        <div class="caption">
                            <h3>Banana </h3>
                            <p>Price: Rs. 60.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(19)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/strawberry.jpg" alt="">
                        <div class="caption">
                            <h3>Strawberry </h3>
                            <p>Price: Rs. 200.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" class="btn btn-primary btn-block" role="button">Buy now</a></p>
                            <?php
                            }else{
                                if(check_if_added_to_cart(20)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                            <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </body>
</html>
