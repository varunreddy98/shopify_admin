<?php
   class Books{
      var $price;
      var $title;
      var $image;
      var $imgname;
      var $category;
      var $id;
}
session_start();
$producerid= $_SESSION['id'];
?>
<?php
            include 'connection.php';
            $sql = "SELECT * FROM items where producerid=$producerid";
            $result = $con->query($sql);
        ?>
        <?php
?>
<!DOCTYPE html>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #ffffff;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

hr{
    margin-top:1px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



.button-like {
  border: 2px solid #8a8a8a;
  background-color: transparent;
  text-decoration: none;
  padding: 1rem;
  position: relative;
  vertical-align: middle;
  text-align: center;
  display: inline-block;
  border-radius: 3rem;
  color: #8a8a8a;
  transition: all ease 0.4s;
}

.button-like span {
  margin-left: 0.5rem;
}

.button-like .fa,
.button-like span {
  transition: all ease 0.4s;
}

.button-like:focus {
  background-color: transparent;
}

.button-like:focus .fa,
.button-like:focus span {
  color: #8a8a8a;
}

.button-like:hover {
  border-color: #cc4b37;
  background-color: transparent;
}

.button-like:hover .fa,
.button-like:hover span {
  color: #cc4b37;
}

.liked {
  background-color: #cc4b37;
  border-color: #cc4b37;
}

.liked .fa,
.liked span {
  color: #fefefe;
}

.liked:focus {
  background-color: #cc4b37;
}

.liked:focus .fa,
.liked:focus span {
  color: #fefefe;
}

.liked:hover {
  background-color: #cc4b37;
  border-color: #cc4b37;
}

.liked:hover .fa,
.liked:hover span {
  color: #fefefe;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 200px;
  right: 595px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Shopify Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
        <?php
        $array=NULL;
        //Fetch Data form database
        if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
            $obj=new Books;
            $obj->price=$row['price'];
            $obj->title=$row['name'];
            $obj->category=$row['category'];
            $obj->imgname=$row['imgname'];
            $obj->id=$row['id'];
            $array[]=$obj;
         ?>
         <?php
           }
           }
           else
            { echo "No data found"; } ?>
<div class="container" id="aaa">
<div class="row" style="margin-left:100px;margin-top:50px">
<?php
$i=0;
$ind=1;
foreach($array as $items) {
  echo '<div class="col-md-3 col-sm-6">';
  echo '<div class="thumbnail">';
       echo '<a href="cart.php">';
       $path='img/'.$items->imgname;
       echo '<img src='.$path.' style="height:200px"'.'>';
       echo '</a>';
       echo '<center>';
           echo '<div class="caption">';
               echo '<h3>'.$items->title.'</h3>';
               echo'<p>Price: Rs.'.$items->price.'</p>'; ?>
               <?php if(!isset($_SESSION['email'])){  ?>
                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Edit</a></p>
              
                   <?php
                   }
                   else{
                          echo '<a href="edit.php?id='.$items->id.'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Edit</a>'; ?>
                           <?php
                   } 
                   echo '<br>';
                   if(isset($_SESSION['email'])){ ?>
                       <form action='remove.php' method='post'>
                        <button class="button button-like">
                        <input type="hidden" name="itemid" value="<?=$items->id;?>" />
                        <i class="fa fa-trash"></i>
                        <span>Remove</span>
                      </button> 
                       </form>
                        <?php  }?>
                   <?php
           echo '</div>';
       echo '</center>';
   echo '</div>';
echo '</div>';
  $i++;
  $ind++;
  if ($i % 4== 0) {echo '</div><div class="row" style="margin-left:100px">';}
}

echo '</div>';
?>
</div>
</div>
<br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               </div>
           </footer>
    </div>
</body>
</html>