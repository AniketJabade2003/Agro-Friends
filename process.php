<?php
session_start();
include 'config/dbconnection.php';

if($_SESSION['id']==""){
    header('location:order.php?m=1');
    die();
}

if(isset($_GET['m'])){
    $query="update tblproducts set paid='Y', address='{$_GET['addr']}',mobile='{$_GET['mob']}' where id='{$_GET['id']}'";
    mysqli_query($link,$query) or die(mysqli_error($link));
    echo "<script> alert('Payment processed successfully'); window.location.href='order.php' </script>";
}

?>
