<?php
    session_start();
    include_once("dbconnect.php");
    $name=$_REQUEST['name'];
    $pwd=$_REQUEST['pwd'];
    $mail=$_SESSION['mail'];
    
    $result=$conn->query("insert into studentinfo values('$name','$mail','$pwd')");
    if($result) {
        header("Location:index.php");
    }
    else {
        echo "eeror";
    }



?>