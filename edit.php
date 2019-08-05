<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=number]:focus {
  border: 3px solid #555;
}
           .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
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
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
        </div>        
<?php
    require 'connection.php';
    //require 'header.php';
    $name;
    $price;
    $brand;
    $category;
    $gender;
    $imgname;
    $item_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $sql1="select * from items where id='$item_id'";
    $res=$con->query($sql1);
    while($row=$res->fetch_assoc())
{    
    $name=$row['name'];
    $price=$row['price'];
    $brand=$row['brand'];
    $category=$row['category'];
    $gender=$row['gender'];
    $imgname=$row['imgname'];
}
$con->close();

echo '<h2 style="text-align:center">Price drop</h2>';

echo '<div class="card">';
$path='img/'.$imgname;
echo '<img src='.$path.' style="width:100%;height:250px"'.'>';
echo  '<h1>'.$name.'</h1>';
  echo '<p class="price">Rs.'.$price.'</p>';
 ?>
<form action="upload_edit.php" method="post">
   <input type="number" placeholder="Alter Price" name="price"><br><br>
   <input type="hidden" name="itemid" value="<?=$item_id;?>" />
<br><br>
  '<p><button>Confirm Edit</button></p>';
  </form>
  <?php
echo '</div>';
?>
</body>
</html>