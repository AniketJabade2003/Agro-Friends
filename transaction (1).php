<?php
include 'config/dbconnection.php';
    $query="select * from tblcard where cardno='{$_POST['cardno']}' and mm='{$_POST['mm']}' and yy='{$_POST['yy']}' and cvv='{$_POST['cvv']}'";
    $result=mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        if($row['amount']>$_POST['amt']){
            echo "<center> Transcation Under Process...<br/>Please do not press back or refresh button.<br/>
                           <img src='online/images/load.gif'></center>";
            header("Refresh:5 url=process.php?id={$_POST['id']}&m=3&addr={$_POST['addr']}&mob={$_POST['mob']}");
        }else{
            echo "<center> Insufficient balance in the account... Reidirecting to the bids<br/>
                           <img src='online/images/load.gif'></center>";
            header("Refresh:5 url=order.php");
        }
    }else{
            echo "<center> Invalid card details... Reidirecting to payment page<br/>
                           <img src='online/images/load.gif'></center>";
            header("Refresh:5 url=payment.php");
        }
?>