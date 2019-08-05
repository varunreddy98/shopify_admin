<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>shopify Admin</title>
        <meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
    </head>
    <body background="img\design.jpg" >
        <div>
           <?php
            require 'header.php';
           ?>
           <div class="container" style="margin-top:200px;margin-left:400px">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                       <?php if(!isset($_SESSION['email'])){  ?>
                  
                        <a href="login.php">
                   <?php
                   }
                   else{ ?>
                           
                    <a href="addproducts.php">  <?php
                       
                       }
                    ?>
                                <img src="img/add.jpg" style="height:300px" alt="men">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Add products</p>
                                        <p></p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                       <?php if(!isset($_SESSION['email'])){  ?>
                  
                  <a href="login.php">
             <?php
             }
             else{ ?>
                     
              <a href="products.php">  <?php
                 
                 }
              ?>
                               <img src="img/view.png" style="height:270px" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">View</p>
                                    <p>.</p>
                                </div>
                           </center>
                       </div>
                  
               </div>
           </div>
            <br><br> <br><br><br><br>
           
        </div>
    </body>
</html>