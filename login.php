<?php session_start();

if(isset($_REQUEST['custlog'])){
        include 'config/dbconnection.php';
        
        $query="select * from tblcustomer where binary username='{$_POST['user']}' and password='{$_POST['pass']}'";
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row['confirmed']=="Yes"){
                $_SESSION['id']=$_POST['user'];
                echo "<script> window.location.href='index.php' </script>";
            }else{
                echo "<script> alert('You are not been confirmed yet. So you cannot login.'); 
                     window.location.href='index.php'; </script>";
            }
        }else{
            echo "<script> alert('Invalid username/password');
                           window.location.href='index.php'; </script>";
        }
    }
    
      if(isset($_REQUEST['distlog'])){
        include 'config/dbconnection.php';
        
        $query="select * from tbldistributor where binary username='{$_POST['user']}' and password='{$_POST['pass']}'";        
        $result=mysqli_query($link,$query);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row['confirmed']=='No'){
                echo "<script> alert('Your reqistration request is not accepted yet...!');
                     window.location.href='index.php'; </script>";
            }else{
                $_SESSION['id']=$_POST['user'];
                echo "<script> window.location.href='distributor/' </script>";
            }
            }else{
                echo "<script> alert('Invalid username/password');
                     window.location.href='index.php'; </script>";
            }
    }
?>