<?php
    require 'connection.php';
    session_start();
    $item_id=$_POST['itemid'];
    $user_id=$_SESSION['id'];
    $price=$_POST['price'];
    $delete_query="update items set price=$price where id='$item_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    header('location: products.php');
?>