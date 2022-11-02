<?php
session_start();
include_once("dbconnect.php");

$msgid=$_REQUEST['mid'];
   
$query="select * from questions where msgid>$msgid";

$result=$conn->query($query);
$Data=array();

if($result->num_rows>0) {
    
    while($row=$result->fetch_assoc()) {
        //echo "$row[msgid]<br> $row[sender]<br>$row[msg]<br><br>";
       array_push($Data,array("msgid"=>$row['msgid'],"sender"=>ucfirst($row['sender']),"message"=>$row['message']));
    }
   // header('Content-Type: application/json');
   // echo json_encode(array('newmsgid' => 5));
   
   header('Content-Type: application/json'); 
   echo json_encode($Data);
}

?>