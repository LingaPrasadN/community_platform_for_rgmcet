<?php

include_once("header.php");
include_once("dbconnect.php");

$result=$conn->query("select * from students where mail=''");

?>