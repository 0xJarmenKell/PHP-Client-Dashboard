<?php
  include('./db.php');
  $id = $_GET['id'];
  $sql = "delete from clients_demo where id=$id";
  $conn->query($sql);
  $conn->close();
  header("location: frontpage.php");
?>