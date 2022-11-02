<?php

    include_once("dbconnect.php");
   
    $pwd=$_REQUEST['pwd'];
    $mail="nlpra@gmail.com";
    $result=$conn->query("update studentinfo set pwd='$pwd' where mail='$mail'");
    if($result) {
        header("Location:index.php");
    }
    else {
        echo "error";
    }



?>