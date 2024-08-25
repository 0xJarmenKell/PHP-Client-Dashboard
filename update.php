<?php
    include('./db.php');
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = "update clients_demo set name='$name', email='$email' where id=$id";
  $result = $conn->query($sql);
  $conn->close();
  header("location: frontpage.php");
?>