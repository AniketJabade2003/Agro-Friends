<?php
    include 'config/dbconnection.php';
    $query="delete from tmpcart where id='{$_GET['r']}' and ip='{$_SERVER['REMOTE_ADDR']}'";
    $res=mysqli_query($link,$query);
    header("location:checkout.php");
                                              
?>
