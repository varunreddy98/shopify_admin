<?php
    require 'connection.php';
    session_start();
    $item_id=$_POST['itemid'];
    $user_id=$_SESSION['id'];
    $select_query="select * from users_items where item_id='$item_id'";
    $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($select_query_result);
    if($rows_fetched>0)
    {

        ?>
        <script>
            window.alert("Product can't be deleted");
        </script>
        <meta http-equiv="refresh" content="1;url=products.php" />
        <?php
    }
    else
    {    
          
        $select_query="delete from items where id='$item_id'";
        $select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));  ?>
        <script>
            window.alert("Product deleted successfully");
        </script> 
        
         <?php
        header('location: products.php');
    }
?>