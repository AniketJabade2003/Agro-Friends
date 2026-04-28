<?php
session_start();
if(!isset($_SESSION['id'])){
    echo "<script> alert('Please login to bid the product'); "
    . "window.location.href='index.php'; </script>";
}else{
    include 'config/dbconnection.php';
    $query="select * from tblbid where id='{$_POST['id']}' and username='{$_SESSION['id']}'";
    $result=mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
        mysqli_query($link,"update tblbid set bid='{$_POST['amt']}' where id='{$_POST['id']}' and username='{$_SESSION['id']}'");
    }else{
        mysqli_query($link,"insert into tblbid values('{$_POST['id']}','{$_SESSION['id']}','{$_POST['amt']}')");
    }
    
        mysqli_query($link,"update tblproducts set customer='{$_SESSION['id']}', current='{$_POST['amt']}' where id='{$_POST['id']}'");
        echo "<script> alert('Bid submitted'); window.location.href='single.php?id={$_POST['id']}'; </script>";
}
?>
