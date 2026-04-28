<?php

if(isset($_GET['del'])){
    include 'config/dbconnection.php';
    $query="delete from tmpcart where ip='{$_SERVER['REMOTE_ADDR']}'";
$result=  mysqli_query($link,$query) or die(mysqli_error($link));
if($result){
    header("location:index.php?id={$_GET['id']}");
}else{
    echo "<script> alert('Cart cannot be made empty.')
          window.location.href='index.php?id={$_GET['id']}' </script>";
}
}

?>
