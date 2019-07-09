<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "project";

  $id = $_GET['id'];
  echo '$id';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
  	die("Connection error". $conn->connect_error);
  }
  else{
  }
?>